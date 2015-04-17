<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Post extends Front_Controller{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('users/auth');
		$this->set_current_user();
		
		$this->load->helper('text');
		$this->load->helper('html');
		$this->set_current_user();
		$this->load->model('post_model', null, true);
		$this->load->model('kategori/kategori_model', null, true);
		
		$this->load->config('post/config');
		$this->upload_config = $this->config->item('upload_config');
		
		$this->load->library('widget/widget_consistence');
		$this->widget_consistence->widget_set_themes();
		$this->load->helper('../uploadut');
		
		$this->load->library("settings/settings_lib");
		
		#load bahasa
        if ($this->session->userdata('site_lang')) {
    		$this->lang->load('post',$this->session->userdata('site_lang'));
	    } else {
            $this->lang->load('post','indonesia');
        }
		
		
	}
	

	
	/*
	 *************************************************************************************************
	   Customize Dimulai dari Disini
	   Return Categories Post
	 *************************************************************************************************
	*/
	public function categories(){
  		
  			$id_= explode('-',$this->uri->segment(2));
		 $categories = $id_[0];
		
		$postsbycategories =  $this->post_model->select_public(0,1,$categories)->row();
		
 		Template::set('postsbycategories', $postsbycategories);
			
		#Related Posts
		$this->load->library('pagination');
		$postcategori=isset($postsbycategories->id)?$postsbycategories->id:0;
		$offset = abs((int) $this->input->get('per_page'));
		$limit = $this->settings_lib->item("site.list_limit");
		//$limit =1;
		
		$this->db->like('judul',$this->input->get('keyword'),"after");
        $total = $this->db->from('post_meta')
						  ->where('post_category', $categories)
						   ->where('id <>',$postcategori)
						  ->where('status_tampil',0)
						  ->where('deleted',0)
						  ->order_by('created_on','DESC')
						  ->get()
						  ->num_rows(); 
		 
		if($this->input->get('keyword')=="")
 		$pager['base_url'] 			= current_url() .'?';
		else
		$pager['base_url'] 			= current_url() .'?keyword='.$this->input->get('keyword');
		
			
		
		
		$pager['total_rows'] 			= $total;
		$pager['per_page'] 			= $limit;
		$pager['page_query_string']	= TRUE;
		$pager['full_tag_open'] = '<div class="pagination"><ul class="pagination">';
		$pager['full_tag_close'] = '</ul></div>';
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
		
		$this->db->like('judul',$this->input->get('keyword'),"after");
		$relatedPosts = $this->db->from('post_meta')
									 ->where('status_tampil',0)
									 ->where('deleted',0)
									 ->where('post_category', $categories)->order_by('created_on','DESC')
									 ->limit($limit, $offset)->get()->result();
									 
 		Template::set('relatedPosts', $relatedPosts);
		
		#catetoris view
		$categori = $this->kategori_model->select(0,1,$categories)->row(); 
		Template::set('categories', $categori);
		
		#catetoris terkait
		  $this->db->where('type_kategori in("post")');
		  $categoriterkait  = $this->db->from('m_kategori')->where( 'deleted',0)->get()->result();
		Template::set('categoriterkait', $categoriterkait);
		
		Template::set('path_image', $this->upload_config['upload_path_image']);
		Template::set_block('sidebar', 'sidebar');

		Template::set("page_title",$categori->judul_bahasa);
		
		
		
		//if ($this->agent->is_mobile()){
			
			//Template::set_view("mobile_categories");
			//Template::render();	
			
			//}else{
		
		//Template::render('one_right_custome_4');	
		Template::render('page');	
		
		//}
		
		
	}
	
	/*
	 *************************************************************************************************
	   Tidak Ada Customize Dimulai dari Disini
	   Return Detail Post
	 *************************************************************************************************
	*/
	public function read(){
 		
 		$data_id=explode("-",abs((int)$this->uri->segment(2,0)));
		$id = $data_id[0];

		$Posts = $this->db->from('post_meta')
						  ->where('id', $id)
						  ->order_by('created_on','DESC')
						  ->get()
						  ->row();
		 
 		Template::set('Posts', $Posts);
		$kategori=$this->kategori_model->find($Posts->post_category);
		Template::set('kategori', $kategori);
		
		#related Posts
		$relatedPosts =array();
		if(isset($Posts->kata_kunci) && !empty($Posts->kata_kunci)){
			$relatedPosts = $this->db->from('post_meta')
									 ->where('post_category', $Posts->post_category)
									 ->order_by('created_on','DESC')
									 ->get()
									 ->result();
  		}
		
		Template::set('relatedPosts', $relatedPosts);
		
		$int =$id;
		if($int!= 0){
			
		#Popular Post 
		#proses Update data 
		if( $this->uri->segment(2)== 'read' && $this->uri->segment(1)== 'post'){
			#cek cosistence ID
		
			#insset jumlah pembaca
			$databaca['baca'] = $Posts->baca+1;
			$this->db->where('id', $int);
 			$pembaca = $this->db->update('post_meta',$databaca);	
			
			
			
		}
		
		}else {
		
		   redirect(site_url());
		}
		
		$terkait=$this->db->query("select * from bf_post_meta where id <> '".$id."' 
		and post_category='".$Posts->post_category."' and  deleted=0 and status_tampil=0  order by created_on desc limit 5")->result();
		
		Template::set("terkait",$terkait);
		Template::set('path_image', $this->upload_config['upload_path_image']);
		
		Template::set_block('sidebar', 'sidebar');

		Template::set("page_title",$Posts->judul);
		
		//if ($this->agent->is_mobile()){
			
			//Template::set_view("mobile_read");
			//Template::render();	
			
			//}else{
		
		
		Template::render();	
		
		//}
	
	}
	
}