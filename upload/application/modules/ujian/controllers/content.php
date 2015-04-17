<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		Template::set('toolbar_title', 'Examation &#187; Manage');
		Template::set_block('sub_nav', 'content/_sub_nav');
		
		$this->load->model("ujian_model");
		#load lang
		$this->lang->load('ujian');
	
	}

	//--------------------------------------------------------------------

	/**
	 * Displays Halaman Index
	 *
	 * @return void
	 */
	public function index()
	{
		$this->auth->restrict('Ujian.Content.View');
                $this->load->helper("formatUang");
                $this->load->model("soal_model");
                
                // Deleting anything?
		if (isset($_POST['deleted']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->ujian_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('ujian_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('ujian_delete_failure') . $this->ujian_model->error, 'danger');
				}
			}
		}
                
                // Publish anything?
		if (isset($_POST['publish']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					
                                        $result = $this->ujian_model->update($pid,array(
                                            'is_active' => 1
                                        ));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('ujian_publish_success'), 'success');
				}
				else
				{
					Template::set_message(lang('ujian_publish_failure') . $this->ujian_model->error, 'danger');
				}
			}
		}
                   
                // Draft anything?
		if (isset($_POST['draft']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->ujian_model->update($pid,array(
                                            'is_active' => 0
                                        ));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('ujian_draft_success'), 'success');
				}
				else
				{
					Template::set_message(lang('ujian_draft_failure') . $this->ujian_model->error, 'danger');
				}
			}
		}
		
                $this->load->library('pagination');
                $this->pager['base_url'] 			= site_url().'/'.SITE_AREA.'/content/ujian?filter='.$this->input->get('filter');
                $this->pager['total_rows'] 			= $this->ujian_model->getDataAllCount();
		$this->pager['per_page'] 			= $this->settings_lib->item('site.list_limit');
		$this->pager['page_query_string']	= TRUE;
		$this->pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$this->pager['full_tag_close'] = '</ul></div>';
		

		$this->pagination->initialize($this->pager);
                
                $query=$this->ujian_model->getDataAll();
		Template::set("query",$query);	
                
               
                //get total 
                $total = $this->ujian_model->count_all();
                Template::set("total",$total);
                
                
                //get total draft
                $totaldraft= $this->ujian_model->count_by("is_active",0);
                Template::set("totaldraft",$totaldraft);
                
                //get total publish
                $totalpublish= $this->ujian_model->count_by("is_active",1);
                Template::set("totalpublish",$totalpublish);
                
		Template::render();
		
	}//end index()
	
	/**
	 * Displays Halaman Create
	 *
	 * @return void
	 */
	public function create()
	{
		$this->load->library('form_validation');
		Template::set('toolbar_title', 'Examation &#187; Create');	
		$this->auth->restrict('Ujian.Content.Create');	
		
		if($this->input->post("simpan")){
			
                        $insert_id = $this->save_post();
                        Template::set_message(lang('ujian_create_success'), 'success');

                        redirect(SITE_AREA .'/content/ujian/view/'.$insert_id);


		}
                 $this->load->model("ujian_model");
                //get parent
                $parent = $this->ujian_model->getParent()->result();
                 
                Template::set("parent",$parent);
		
			Template::render();
		
	}//end create()
	
        /**
	 * Displays Halaman Edit
	 *
	 * @return void
	 */
	public function edit($id)
	{
	
                $this->load->library('form_validation');
		Template::set('toolbar_title', 'Examation &#187; Edit');	
		$this->auth->restrict('Ujian.Content.Edit');	
	
		if (empty($id))
		{
			Template::set_message(lang('ujian_invalid_id'), 'danger');
			redirect(SITE_AREA .'/content/ujian');
		}
                
		if($this->input->post("simpan")){
			
                        
                        $insert_id = $this->save_post("update",$id);
                        Template::set_message(lang('ujian_edit_success'), 'success');

                        redirect(SITE_AREA .'/content/ujian/view/'.$id);


		}
                
                $this->load->model("ujian_model");
                //get parent
                $parent = $this->ujian_model->getParent()->result();
                Template::set("parent",$parent);
		
                Template::set("query",$this->ujian_model->find($id));
                Template::set_view("content/create");
		Template::render();
		
	}//end edit()
	
        
	/**
	 * Displays Halaman View
	 *
	 * @return void
	 */
	 public function view($id)
	{
		Template::set('toolbar_title', 'Examation &#187; Detail');
                $this->load->model("soal_model");
                
		$this->auth->restrict('Ujian.Content.View');
		
		if (empty($id))
		{
			Template::set_message(lang('ujian_invalid_id'), 'danger');
			redirect(SITE_AREA .'/content/ujian');
		}
                
		$this->load->helper("formatUang");
                Template::set("query",$this->ujian_model->find($id));
		
                //query soal
                Template::set("soal",$this->soal_model->where(array("ujian_id"=>$id))
                                                      ->order_by("urutan","asc")
                                                      ->find_all());
                
                //edit soal 
                if($this->uri->segment(6) && $this->uri->segment(7)){
                    Template::set("editsoal",$this->soal_model->find($this->uri->segment(7)));
                }
                
                Template::set("urutan_soal",$this->soal_model->getMaxUrutan($id));
                
                //inputbaru dan update soal
                if($this->input->post("simpan")){
			
                        //update
                        if($this->uri->segment(6) && $this->uri->segment(7)){
                            $insert_id = $this->save_soal("update",(int)$this->uri->segment(7));
                            if($insert_id){
                                 Template::set_message(lang('soal_edit_success'), 'success');
                                 redirect(SITE_AREA .'/content/ujian/view/'.$id);
                            }else{
                                Template::set_message(lang('soal_edit_failure').$this->soal_model->error, 'danger');
                    
                            }
                            
                         //insert  
                         }else{
                            
                            $insert_id = $this->save_soal();
                            if($insert_id){
                                Template::set_message(lang('soal_create_success'), 'success');
                                redirect(SITE_AREA .'/content/ujian/view/'.$id);
                            }else{
                                
                                Template::set_message(lang('soal_create_failure').$this->soal_model->error, 'danger');
                            }
                            
                         }
                        
                        


		}
                
                 // Deleting anything?
		if (isset($_POST['deleted']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->soal_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('soal_delete_success'), 'success');
                                        redirect(SITE_AREA .'/content/ujian/view/'.$id);
                                        
                                }
				else
				{
					Template::set_message(lang('soal_delete_failure') . $this->soal_model->error, 'danger');
				}
			}
		}
                
                
                Template::render();
		
	}//end view()
	
        /**
	 * Proses Hapus
	 *
	 * @return void
	 */
        
        public function hapus($id){
        
            $this->auth->restrict('Ujian.Content.Delete');
            
            if (empty($id))
		{
			Template::set_message(lang('ujian_invalid_id'), 'danger');
			redirect(SITE_AREA .'/content/ujian');
		}
                $this->user_model->delete($id);
                Template::set_message(lang('ujian_delete_success'), 'success');

                redirect(SITE_AREA .'/content/ujian');
            
        }
        
        //end hapus()
	
        
         /**
	 * Proses Registration Modul 
	 *
	 * @return void
	 */
        
        public function registration(){
            
            Template::set('toolbar_title', 'Examation &#187; Registration');
                
	    $this->auth->restrict('Ujian.Content.Registration');
            
            $this->load->model("registrasi_model");
            
            $this->load->helper("tanggal_indo");
            
            
            //proses apporve 
            if(isset($_POST["approve"])){
                
                
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{                 
                                        $data["status"]=1;
					$result = $this->registrasi_model->update($pid,$data);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di approve' , 'success');
				}
				else
				{
					Template::set_message('gagal di approve', 'danger');
				}
			}
                
            }
            
              //proses not apporve 
            if(isset($_POST["notapprove"])){
                
                
                
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
                                  $data["status"]=0;
					$result = $this->registrasi_model->update($pid,$data);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' berhasil di not approve', 'success');
				}
				else
				{
					Template::set_message('gagal di not approve', 'danger');
				}
			}
                
                
            }
            
            
            //query ujian 
            $ujian = $this->ujian_model
                          ->select("judul_ujian,kode_ujian,(select count(*) from bf_registrasi_ujian "
                                  . "where bf_ujian.kode_ujian=bf_registrasi_ujian.id_ujian) as jumlah")
                           ->where("is_active",1)->find_all();
            
            Template::set("ujian",$ujian);
            
            //detail ujain 
            $detail_ujian = $this->ujian_model->find($this->uri->segment(5));
            Template::set("detail_ujian",$detail_ujian);
            
            if($this->input->get("filter")){
                  $this->registrasi_model->like("bf_users.display_name",$this->input->get("filter"));
                  $this->registrasi_model->or_like("bf_registrasi_ujian.tanggal",$this->input->get("filter"));
             }
           
             if(isset($_GET["status"]))
             $this->registrasi_model->where("bf_registrasi_ujian.status",$this->input->get("status"));
           $registrasi = $this->registrasi_model
                    ->select("bf_registrasi_ujian.status,bf_registrasi_ujian.id_registrasi_ujian,"
                            . "bf_registrasi_ujian.id_user,"
                            . "bf_registrasi_ujian.tanggal,"
                            . "bf_registrasi_ujian.id_ujian,"
                            . "ujian.judul_ujian,"
                            . "bf_users.display_name")
                    ->join("bf_users","bf_users.id=bf_registrasi_ujian.id_user")
                    ->where("bf_registrasi_ujian.id_ujian",$this->uri->segment(5))
                    ->join("ujian","ujian.kode_ujian=bf_registrasi_ujian.id_ujian")
                    ->order_by("bf_registrasi_ujian.tanggal","desc")
                    ->limit(30)
                    ->find_all();
                       
            Template::set("registrasi",$registrasi);
	    
            Template::set_block("sidebar","content/sidebar_registration");
            
            Template::render("custome_two_left");
            
        }
        
        
	/**
	 * Proses Insert Anda Update Ujian
	 *
	 * @return void
	 */
	 private function save_post($type='insert', $id=0)
	{
		
		if ($type == 'update')
		{
			$_POST['id'] = $id;
                        $edit=$this->ujian_model->find($id);
		}
		
                $this->load->library('users/auth');
		
		
		$data = array();
		$data['judul_ujian']        = $this->input->post('judul_ujian');
		$data['keterangan']        = $this->input->post('keterangan');
		$data['nilai_kelulusan']        = $this->input->post('nilai_kelulusan');
		$data['durasi_waktu']        = $this->input->post('durasi_waktu');
		$data['jumlah_soal']        = $this->input->post('jumlah_soal');
		$data['pembayaran']        = $this->input->post('pembayaran');
                $data['urutan']        = $this->input->post('urutan');
                $data['parent_id']        = $this->input->post('parent_id');
                $data['created_user']     = $this->auth->user_id();
		
		if ($type == 'insert')
		{
		
			$data['created_on']  = date("Y-m-d H:i:s");
			
			
			$id = $this->ujian_model->insert($data);

			if ($id)
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
		
			$data['modified_on']  = date("Y-m-d H:i:s");	
			$return = $this->ujian_model->update($id, $data);
		}

		return $return;
		
	}
        
        
	/**
	 * Proses Insert Anda Update Soal
	 *
	 * @return void
	 */
	 private function save_soal($type='insert', $id=0)
	{
		
		if ($type == 'update')
		{
			$_POST['id'] = $id;
                        $edit=$this->soal_model->find($id);
		}
		
             
		$data = array();
		$data['question_name']        = $this->input->post('question_name');
                $data['urutan']        = $this->input->post('urutan');
                $data['answer1']        = $this->input->post('answer1');
                $data['answer2']        = $this->input->post('answer2');
                $data['answer3']        = $this->input->post('answer3');
                $data['answer4']        = $this->input->post('answer4');
                $data['answer5']        = $this->input->post('answer5');
                $data['answer']        = $this->input->post('answer');
                $data['ujian_id']        = $this->input->post('ujian_id');
		
		if ($type == 'insert')
		{
		
			
			$id = $this->soal_model->insert($data);

			if ($id)
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
                	$return = $this->soal_model->update($id, $data);
		}

		return $return;
		
	}
	

}//end class