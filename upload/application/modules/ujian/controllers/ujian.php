<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ujian extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();

		
		$this->load->library('users/auth');
		$this->set_current_user();
                
                $this->load->model('sosmed/sosmed_model', null, true);
		
	
	}
	
	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{
		
	$this->load->model("ujian_model");
        $this->load->helper("tanggal_indo");
        
        $this->load->library('pagination');
        $pager['base_url'] 			= site_url().'/ujian?filter='.$this->input->get('filter');
        $pager['total_rows'] 			= $this->ujian_model->getDataAllCountPublish();
        $pager['per_page'] 			= $this->settings_lib->item('site.list_limit');
        $pager['page_query_string']	= TRUE;
        $pager['full_tag_open'] = '<ul class="pagination">';
        $pager['full_tag_close'] = '</ul>';
        $pager['next_link']  = 'Next';
        $pager['next_tag_open'] = '<li class="next">';
        $pager['next_tag_close'] = '</li>';
        $pager['prev_tag_open'] = '<li class="previoust">';
        $pager['prev_tag_close'] = '</li>';
        $pager['prev_link']   = 'Prev';
        $pager['cur_tag_open']  = '<li class="active"><a href="#">';
        $pager['cur_tag_close']  = '</a></li>';
        $pager['num_tag_open']  = '<li>';
        $pager['num_tag_close']  = '</li>';
        $pager['last_link'] = 'Last';
        $pager['last_tag_open'] = '<li>';
        $pager['last_tag_close'] = '</li>';
        $pager['first_link'] = 'First';
        $pager['first_tag_open'] = '<li>';
        $pager['first_tag_close'] = '</li>';


        $this->pagination->initialize($pager);

        $query=$this->ujian_model->getDataAllPublish();
        Template::set("query",$query);
        
        $sosmed= $this->sosmed_model->getSosmed();
        Template::set("sosmed",$sosmed);
        
        if($this->agent->is_mobile()){
            Template::set_view("index_mobile");
            Template::render("mobile_index");
        }else{
            Template::render();
        }
		
	
	}//end index()
        
        function part_ujian($id){
            
            $this->load->model("ujian_model");
            $this->load->model("hasil_ujian_model");
            
             $query=$this->ujian_model->getDataAllPublishMobile($id);
             $data= array();
             $no=1;
             $disabled=0;
             $cek=0;
             $score = 0;
             if($this->auth->is_logged_in() === TRUE)
                {
                $is_login=TRUE;
             }else{
                 $is_login=FALSE;
             }
             
             $no2=1;
             foreach($query as $row){
                 
                  $hasil_ujian = $this->hasil_ujian_model->getHasilUjian($this->auth->user_id(),$row["kode_ujian"]);
                  $cek = $this->hasil_ujian_model->countIkutiUjianMobileUrutan($this->auth->user_id(),$row["kode_ujian"]);
                  
              if($row["urutan"]==1){
                  $disabled=1;
                  $no2=$cek+1;
                  
              }else{
                  
                   if($row["urutan"]==$cek){
                      $disabled=1;
                     $no2=$row["urutan"]+1;
                   }else{
                       if($row["urutan"]==$no2){
                       $disabled=1;    
                       }else{
                       $disabled=0;
                       }
                           
                   }
                  
                  
              }
              if ($is_login === TRUE)
                {
                 
                 $status_login=1;
                 $message="";
             }else{
                 $disabled=0;
                 $status_login=0;
                 $message="Untuk memulai ujian silakan untuk mendaftar"
                             . " <a href='".site_url("/register")."'>disini</a> atau jika anda 
    sudah mempunyai akun silakan untuk login terlebih dahulu <a href='".site_url("/login")."'>disini</a>";
                }
                 
               $data[] = array("kode_ujian"=>$row["kode_ujian"],
                               "judul_ujian"=>$row["judul_ujian"],
                               "durasi_waktu"=>$row["durasi_waktu"],
                               "jumlah_soal"=>$row["jumlah_soal"],
                               "disabled"=>$disabled,
                               "status_login"=>$status_login,
                               "message"=>$message,
                               "jawaban_benar"=>@$hasil_ujian->total_benar?$hasil_ujian->total_benar:0,
                               "cek"=>$no2."-".$row["urutan"],
                               "score"=>$score
                        );
            
              $no++; 
             }
            
            echo json_encode($data);
            
            die;
            
        }
        
	/**
	 * Displays the start ujian
	 *
	 * @return void
	 */
	function startujian($id){
            
            $this->load->model("soal_model");
            $this->load->model("ujian_model");
            $this->load->model("registrasi_model");
            
             if (empty($id))
	    {
                Template::set_message(lang('ujian_invalid_id'), 'danger');
                 redirect('/ujian/detailujian/'.$id);
	    }
            
            $cekpembayaran=$this->registrasi_model->checkPembayaran($this->auth->user_id(),$this->uri->segment(3));
            if($cekpembayaran==FALSE){
                 Template::set_message("Anda Belum Melakukan Registrasi atau Proses Pembayaran", 'danger');
                 redirect('/ujian/detailujian/'.$id);
            }
            
            $ujian= $this->ujian_model->find($id);
            
                    
            Template::set("ujian",$ujian);
           
            
            if($this->agent->is_mobile()){
                Template::set_view("startujian_mobile");
                Template::render("mobile_index");
            }else{
                $soal=$this->soal_model->where("ujian_id",$id)->order_by("urutan","asc")->find_all();
            $rows=$this->soal_model->where("ujian_id",$id)->count_all();
             Template::set("soal",$soal);
            Template::set("rows",$rows);
                Template::render();
            }
            
            
            
		
	}
        
        
         public function soal($id,$offset=0){
            
            $this->load->model("soal_model");
            
            $soal=$this->soal_model->where("ujian_id",$id)->limit(20,$offset)->order_by("urutan","asc")->find_all();
            $data=array();
            foreach($soal as $row){
                $data[] = array("id"=>$row->id,
                                "soal"=>$row->question_name,
                                "answer1"=>$row->answer1,
                                "answer2"=>$row->answer2,
                                "answer3"=>$row->answer3,
                                "answer4"=>$row->answer4,
                                "answer5"=>$row->answer5
                        );
            }
            
            echo json_encode($data);
            
            die;
            
        }
        
        public function getDataUjian(){
            
           $this->load->model("ujian_model");
           $this->load->model("hasil_ujian_model");
          $this->load->helper("tanggal_indo");
             $this->load->helper("formatUang");
            $query=$this->ujian_model->getDataAllPublishMobile();
            $data=array();
            
            foreach($query as $row){
                
                $score = $this->hasil_ujian_model->getScore($this->auth->user_id(),$row["kode_ujian"]);
                
                $score = $score / 10;
                $data[] = array("id"=>$row["kode_ujian"],
                                "judul"=>$row["judul_ujian"],
                                "price"=>$row["pembayaran"],
                                "keterangan"=>$row["keterangan"],
                                "nilai_kelulusan"=>$row["nilai_kelulusan"],
                                "durasi_waktu"=>$row["durasi_waktu"],
                                "jumlah_soal"=>$row["jumlah_soal"],
                                "score"=>round($score),
                                "pembayaran"=>$row["pembayaran"]<>0?formatUang($row["pembayaran"]):"Free",
                        );
            }
            
            echo json_encode($data);
            
            die;
            
        }
        
        /**
	 * Displays the hasil ujian
	 *
	 * @return void
	 */
	public function hasilujian($id){
            
            if (empty($id))
	    {
                Template::set_message(lang('ujian_invalid_id'), 'danger');
                redirect('/ujian');
	    }
            
            $right_answer=0;
            $wrong_answer=0;
            $unanswered=0; 
            
            $this->load->model("soal_model");
            $this->load->model("ujian_model"); 
            $this->load->model("hasil_ujian_model"); 
            
            $ujian=$this->ujian_model->find($id);
            
            if(isset($_POST)){
            
            $keys=array_keys($_POST);
            $order=join(",",$keys);
           
            $response=$this->soal_model->getHasilUjian($order);
            $array_data=array();
            foreach($response->result_array() as $result){
               
                $data["id_soal"]=$result["id"];
                $data["answer"]=$_POST[$result['id']];
                
                 
                if($result['answer']==$_POST[$result['id']]){
                    $right_answer++;
                    $data["status"]="Benar";
                }else if($_POST[$result['id']]==6){
                  
                    $unanswered++;
                  
                  $data["status"]="Tidak dijawab";
                    
                }
                else{
                    $data["status"]="Salah";
                    $wrong_answer++;
                }
                
                $array_data[]=$data;
            
              }
         
              
             $data_json=json_encode($array_data);
             
             $datavalue["tanggal"]=date("Y-m-d H:i:s");
             $datavalue["hasil_jawaban"]=$data_json;
             $datavalue["id_user"]=$this->auth->user_id();
             $datavalue["id_ujian"]=$id;
             $datavalue["total_benar"]=$right_answer;
             $datavalue["total_salah"]=$wrong_answer;
             $datavalue["total_tidak_dijawab"]=$unanswered;
             
             //rumus score score = jawaban/soal*100
             $score= ($right_answer / $ujian->jumlah_soal)*100; 
             
             if($score < $ujian->nilai_kelulusan)
                $datavalue["status_lulus"]= "tidak";
             else
                $datavalue["status_lulus"]= "lulus";
             
             
             $datavalue["score"]= $score; 
             
             if($this->hasil_ujian_model->countIkutiUjianMobile2($this->auth->user_id(),$id)==0){
             
             $hasil=$this->hasil_ujian_model->insert($datavalue);
             }else{
             $update=$this->hasil_ujian_model->update($datavalue,array("id_user"=>$this->auth->user_id(),"id_ujian"=>$id));
             $hasil = $this->db->where(array("id_user"=>$this->auth->user_id(),"id_ujian"=>$id))->get("bf_hasil_ujian")->row()->id_hasil_ujian;
             
             }
             echo $hasil;
             
            }
            
            die;
            
        }
        
        
        /**
	 * Displays the nilai ujian
	 *
	 * @return void
	 */
        
        function nilaiujian($id,$hasil){
            
            $this->load->model("hasil_ujian_model");
            $this->load->model("ujian_model");
            $this->load->model("soal_model");
            
            $soal= $this->soal_model->where("ujian_id",$id)->order_by("urutan","asc")->find_all();
            $ujian = $this->ujian_model->find($id);
            $hasil_ujian = $this->hasil_ujian_model->find($hasil);
            
            Template::set("soal",$soal);
            Template::set("ujian",$ujian);
            Template::set("hasil_ujian",$hasil_ujian);
            
            if(@$hasil_ujian->score < @$ujian->nilai_kelulusan){
                $status= "Maaf Anda Belum Lulus !!";
                $icon =  '<img src="'.Template::theme_url("images/sedihedit.png").'">';
               
            }else{ 
                 $status= "Selamat Anda Lulus !!";
                $icon =  '<img src="'.Template::theme_url("images/senang.png").'">';
                
                
            }
            
            Template::set("status",$status);
            Template::set("icon",$icon);
            
             if($this->agent->is_mobile()){
                Template::set_view("nilaiujian_mobile");
                Template::render("ajax");
            }else{
                Template::render();
            }
            
            
          
            
        }
        
        
	/**
	 * Displays the detail ujian
	 *
	 * @return void
	 */
	function detailujian($id){
            
            if (empty($id))
	    {
                Template::set_message(lang('ujian_invalid_id'), 'danger');
                redirect('/ujian');
	    }
                
            
            $this->load->model("ujian_model");
            $this->load->model("hasil_ujian_model");
            $this->load->helper("formatUang");
            $this->load->model("registrasi_model");
            
            $score = $this->hasil_ujian_model->getScore($this->auth->user_id(),$id);
            $score = $score / 10;
            Template::set("score",$score);
            
               $sosmed= $this->sosmed_model->getSosmed();
        Template::set("sosmed",$sosmed);
            
            $query=$this->ujian_model->find($id);
            Template::set("query",$query);
            
                 
                if($this->registrasi_model->checkRegistrasi($this->auth->user_id(),$this->uri->segment(3))==FALSE): 
                    
                        $data["id_ujian"]=$id;
                        $data["id_user"]=$this->auth->user_id();
                        if($query->pembayaran==0){
                        $data["status"]=1;
                        }else{
                        $data["status"]=0;
                            
                        }
                        $data["tanggal"]= date("Y-m-d H:i:s");
                        $this->registrasi_model->insert($data);
                    
                endif;
            
            $query2=$this->ujian_model->getDataAllPublish($id);
            Template::set("query2",$query2);    
            
            if($this->agent->is_mobile()){
            Template::set_view("detailujian_mobile");
            Template::render("mobile_index");
            }else{
            Template::render();
            }
           
		
	}
        
        public function register_ujian($id){
                
                 $this->load->model("ujian_model");
                $this->load->model("registrasi_model");
                $query=$this->ujian_model->find($id);
                
                if ($this->auth->is_logged_in() === TRUE)
                {

                
                if($this->registrasi_model->checkRegistrasi($this->auth->user_id(),$id)==FALSE): 
                    
                        $data["id_ujian"]=$id;
                        $data["id_user"]=$this->auth->user_id();
                        if($query->pembayaran==0){
                        $data["status"]=1;
                        }else{
                        $data["status"]=0;
                            
                        }
                        $data["tanggal"]= date("Y-m-d H:i:s");
                        $this->registrasi_model->insert($data);
                        
                        
                    
                endif;
                
                
               
                $data1["status_login"]=1;
                $data1["buttonstart"]="start";
                
                }else{
                     $data1["status_login"]=0;
                     $data1["message"]="Untuk memulai ujian silakan untuk mendaftar"
                             . " <a href='".site_url("/register")."'>disini</a> atau jika anda 
    sudah mempunyai akun silakan untuk login terlebih dahulu <a href='".site_url("/login")."'>disini</a>";
                     $data1["buttonstart"]="stop";
                     
                }
                
                echo json_encode($data1);
                
                die;
            
        }
        
        /**
	 * Displays the registrasi ujian
	 *
	 * @return void
	 */
	public function registrasi($id){
            
            
            $this->load->model("registrasi_model");
            $this->load->model("ujian_model");
            
            $query= $this->ujian_model->find($id);
            
          
            
            $data["id_ujian"]=$id;
            $data["id_user"]=$this->auth->user_id();
            $data["tanggal"]= date("Y-m-d H:i:s");
            if($query->pembayaran!=0){
                
                
                $datajson["message"] = "<div class='alert alert-success'>Selamat Anda Berhasil Melakukan Registrasi Silakan"
            . " untuk Melakukan Pembayaran Ke Nomor Rekening Yang Sudah di kirimkan ke email anda dan "
                    . "lakukan konfirmasi pembayaran agar kami bisa mengetahui bahwa anda sudah mentransfer uang.</div>";
           
                #proses pengirim email 
                $this->load->library('emailer/emailer');
                $this->emailer->enable_debug(TRUE);
                $message = $this->kirimemailregistrasi($id);
                $this->load->model('users/user_model', null, true);   
                $meta_konfirm= $this->user_model->find_user_and_meta_role(1);
                $email_pengguna = $this->user_model->find($this->auth->user_id());
                $email_to = $meta_konfirm->email.",".$email_pengguna->email;
                
                $dataemail = array(
                    'to'        =>  $email_to,
                    'subject'	=> "Registrasi Ujian  ".settings_item('site.title'),
                    'message'	=> $message
                  );
                
                $this->emailer->send($dataemail, FALSE);
                echo $this->emailer->error;    
                
            }else{
                $data["status"]=1;
                $datajson["message"] = "<div class='alert alert-success'>Silakan untuk mengikuti ujian klik start untuk memulai.</div>";
                
            }
            
            $this->registrasi_model->insert($data);
            
            
            $datajson["status"] = $query->pembayaran;
             
            echo json_encode($datajson);
            
        }
	
	function konfirmasibayar(){
		//load js 
		Assets::clear_cache();
		Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
		Assets::add_js('jquery-ui-1.8.13.min.js');
		Assets::add_js('jquery-ui-timepicker-addon.js');
		Assets::add_css('jquery-ui-timepicker.css');
		
	
			// Captcha parameters:
		$captchaConfig = array(
		  'CaptchaId' => 'SampleCaptcha', // a unique Id for the Captcha instance
		  'UserInputId' => 'CaptchaCode' // Id of the Captcha code input textbox
		);
		// load the BotDetect Captcha library
		$this->load->library('BotDetect/BotDetectCaptcha', $captchaConfig);
	
		// make Captcha Html accessible to View code
		$data['captchaHtml'] = $this->botdetectcaptcha->Html();
	
		// initially, the message shown to the visitor is empty
		$data['captchaValidationMessage'] = '';
		Template::set('captchaHtml',$data['captchaHtml']);
		
		//kirim 
		if (isset($_POST['kirim']))
		{
			//validasi form
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('no_order', 'No Order', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal Transfer', 'required');
			$this->form_validation->set_rules('nilai', 'Nilai Transfer', 'required|numeric');
			
			 if ($this->form_validation->run() == false) {
					Template::set_message(validation_errors(), 'danger');
			 }else{
				//cek validasi chaptcha
				$code = $this->input->post('CaptchaCode');
				$isHuman = $this->botdetectcaptcha->Validate($code);
				if ($isHuman) {
						
							#proses pengirim email 
							$this->load->library('emailer/emailer');
							$this->emailer->enable_debug(TRUE);
							
							$datapost=array("no_order"=>$this->input->post("no_order"),
														"email"=>$this->input->post("email"),
														"nama"=>$this->input->post("nama"),
														"tanggal"=>$this->input->post("tanggal"),
														"nilai"=>$this->input->post("nilai"),
														"catatan"=>$this->input->post("catatan"),
														"asal_bank"=>$this->input->post("asal_bank"),
														"tujuan_bank"=>$this->input->post("tujuan_bank")
														);
							
							$message = $this->kirimemailkonfirmasi($datapost);
	  
							$this->load->model('users/user_model', null, true);   
							  $meta_konfirm= $this->user_model->find_user_and_meta_role(11);
							
							$email_to = $meta_konfirm->email;
					   
							$data = array(
										'to'		=>  $email_to,
									    'subject'	=> "Konfirmasi Pembayaran  ".settings_item('site.title'),
										'message'	=> $message
										);

							$success = $this->emailer->send($data, FALSE);
							Template::set_message("Konfirmasi pembayaran telah terkirim dan akan segera di proses.", 'success');
							 redirect('konfirmasi-pembayaran');
				}else {
					// Captcha validation failed, return an error message
					 Template::set_message("CAPTCHA validation failed, please try again.", 'danger');
					
				}
				  
			}
		}
		
		Template::set("email_konfirm",$this->current_user->email);
		Template::set("nama_konfirm",$this->current_user->display_name);
		Template::set("page_title","Konfirmasi Pembayaran");
		Template::set_view("konfirmasi_bayar");
		Template::render();	
		
	
	}
	
	//email konfirmasi
	function kirimemailkonfirmasi($data=array()){
	
	 $message =$this->load->view('_emails/konfirmasi', 
						array("data"=>$data), true);
	return  $message ;
	
	}
        
        function kirimemailregistrasi($id){
            
            $data["kode_ujian"] = $id;
            $this->load->model("ujian_model");
            $this->load->model("users/user_model");
            $this->load->model("sosmed/sosmed_model");
            $ujian = $this->ujian_model->find($id);
            $users = $this->user_model->find($this->auth->user_id());
            $this->load->helper("formatUang");
            $data["ujian"]= $ujian;
            $data["users"]= $users;
            $data["sosmed"]= $this->sosmed_model->getSosmed();
            
            $message = $this->load->view('_emails/registrasi_ujian',$data, true);
             $message;
            return $message;
            
        }
        
        //get twitter widget
        function getTwitter(){
            $data["sosmed"]= $this->sosmed_model->getSosmed();
            
            $this->load->view("widget/twitter",$data);
            
            
        }
        
        //get share widget
         function getShare(){
            
            $this->load->view("widget/share");
            
            
        }
	
	
}

?>
