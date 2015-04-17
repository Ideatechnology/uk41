<?php

class member extends Front_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('users/auth');
	$this->set_current_user();
        $this->load->model('sosmed/sosmed_model', null, true);
    }
    
    public function index(){
        
        $sosmed= $this->sosmed_model->getSosmed();
        Template::set("sosmed",$sosmed);
        
        $jumlah=$this->db->query("select count(*) as jumlah from bf_users a inner join bf_universitas b on a.universitas=b.id_universitas where role_id=4 and deleted=0 ")->row();

        $offset = $this->input->get('per_page')!=""?$this->input->get('per_page'):0;
        
        $limit = $this->settings_lib->item('site.list_limit');
        $this->load->library('pagination');
        $pager['base_url'] 			= site_url().'/member?';
        $pager['total_rows'] 			= $jumlah->jumlah;
        $pager['per_page'] 			= $limit;
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

        
	 $select="select * from bf_users a inner join bf_universitas b on a.universitas=b.id_universitas where role_id=4 and deleted=0 "
                 . " order by a.display_name asc limit ".$offset.",".$limit;
	 $result=$this->db->query($select);
	Template::set("result",$result);
        
        if($this->agent->is_mobile()){
            
            $data=array();
            foreach($result->result_array() as $row){
                $data[] = array(
                                "display_name"=>$row["display_name"],
                                "foto"=>"cop_".$row["foto"],
                                "universitas"=>$row["universitas"]
                                
                        );
            }
            
            echo json_encode($data);
            
            die;
            
        }else{
            Template::render();
        }
        
    }
    
    public function uploadfoto(){
        
        $data = array();

		
                $config['upload_path'] = './application/modules/member/foto/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE;
                $config['max_size'] = 0;
                $config['max_width']  = 0;
		$config['max_height']  = 0;  
                
                $this->load->library('upload', $config);
 
                if (!$this->upload->do_upload("images")){ //Upload file
                    $data['error']=$this->upload->display_errors();
                    
                }else{
                
                $upload_data = $this->upload->data();
            
            
                $image_config["image_library"] = "gd2";
                $image_config["source_image"] = $upload_data["full_path"];
                $image_config['create_thumb'] = FALSE;
                $image_config['maintain_ratio'] = TRUE;
                $image_config['new_image'] = $upload_data["file_path"].$upload_data['file_name'];
                $image_config['quality'] = "100%";
                $image_config['width'] = 100;
                $image_config['height'] = 100;
                $dim = (intval($upload_data["image_width"]) / intval($upload_data["image_height"])) - ($image_config['width'] / $image_config['height']);
                $image_config['master_dim'] = ($dim > 0)? "height" : "width";

                $this->load->library('image_lib');
                $this->image_lib->initialize($image_config);

                $this->image_lib->resize();
                
                $image_config['image_library'] = 'gd2';
                $image_config['source_image'] = $upload_data["file_path"].$upload_data['file_name'];
                $image_config['new_image'] = $upload_data["file_path"]."cop_".$upload_data['file_name'];
                $image_config['quality'] = "100%";
                $image_config['maintain_ratio'] = FALSE;
                $image_config['width'] = 100;
                $image_config['height'] = 100;
                $image_config['x_axis'] = '0';
                $image_config['y_axis'] = '0';

                $this->image_lib->clear();
                $this->image_lib->initialize($image_config); 
                
                if (!$this->image_lib->crop()){
                        $data['error']="";
                }else{
                    $data['success'] = base_url().'application/modules/member/foto/cop_'.$upload_data['file_name'];
                     $this->db->query("update bf_users set foto='".$upload_data['file_name']."' where id='".$this->auth->user_id()."'");
		
                }
                
		
               
                }
		
	
	echo json_encode($data);
	

        
        
    }
    
    
  
    
    
    public function peringkat(){
        
       
        $query=$this->db->query("SELECT round(sum(a.score)/10) as score,a.id_user,b.display_name,b.foto,c.universitas FROM `bf_hasil_ujian` a inner join bf_users b on a.id_user=b.id inner join bf_universitas c on b.universitas=c.id_universitas where a.score <> 0 order by score desc limit 10")->result_array();
        Template::set("query",$query);
        
        if($this->agent->is_mobile()){
            
            $data=array();
            foreach($query as $row){
                $data[] = array(
                                "display_name"=>$row["display_name"],
                                "score"=>$row["score"],
                                "foto"=>"cop_".$row["foto"],
                                
                        );
            }
            
            echo json_encode($data);
            
            die;
            
        }else{
            Template::render();
        }
        
        
        
    }
    
}
?>