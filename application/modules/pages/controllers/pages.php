<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
 		$this->load->helper('form');
		$this->load->library('users/auth');
		$this->set_current_user();
			   #-------------------------------------------------
		
		$this->load->config('pages/config');
		$this->upload_config = $this->config->item('upload_config');
		
		$this->load->model("pages_model");
                
                 $this->load->model('sosmed/sosmed_model', null, true);
		
		
	
				#load bahasa
        if ($this->session->userdata('site_lang')) {
    		$this->lang->load('page',$this->session->userdata('site_lang'));
	    } else {
            $this->lang->load('page','indonesia');
        }
		
				
		
		
 	}
	
    /*
	 *************************************************************************************************
	   Sub Blog
	   Return Referensi Menu Blog Level 3
	 *************************************************************************************************

	/*END CUSTOMIZED*/

	
	public function detail(){
		
		$this->load->helper('get_hirarki');
 		$id_detail=explode("-",$this->uri->segment(3));
		#load query detail
	    $this->load->helper('text');
		$id = abs((int)$id_detail[0]);
		$id_parent = abs((int)$this->uri->segment(5));
		$this->session->set_userdata(array("pageid"=>$id));
		$Pages = $this->pages_model->select_join(0,1,$id)->row(); 
		
		#insset jumlah pembaca
	    $databaca['baca'] = @$Pages->baca+1;
	    $this->db->where('id', $id);
 	    $pembaca = $this->db->update('pages_meta',$databaca);	
		 
		Template::set('path_image',$this->upload_config['upload_path_image']); 
 		Template::set('pages', $Pages);
		
		Template::set("page_title",$Pages->judul);
		
		
                    if ($this->agent->is_mobile()){
                         if ($this->input->get("type")=="ajax"){
                        
                        $data=array("pages"=>$Pages,"page_title"=>$Pages->judul);
                        $this->load->view("ajax/pagedetail",$data);	
                        
                         }else{
                        Template::set_view("mobile_detail");
                        Template::render("mobile_index");	
                         }
                    }else{
                        Template::set_block('sidebar', 'sidebar');
                        Template::render();	
                    }
		
	}
        
       
	
	
}