<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Sosmed.Content.View');
		$this->load->model('sosmed_model', null, true);
		$this->lang->load('sosmed');
		$this->load->library("form_validation");
		$this->load->helper('../uploadut');
			$this->load->config('config');
			$this->upload_config = $this->config->item('upload_config');
		$this->load->helper("html");
		Template::set_block('sub_nav', 'content/_sub_nav');
Assets::clear_cache();
		Assets::add_module_js('sosmed', 'sosmed.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

	
	redirect(SITE_AREA .'/content/sosmed/edit/1');
		
	}

	//--------------------------------------------------------------------



	//--------------------------------------------------------------------


	/**
	 * Allows editing of sosmed data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('sosmed_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/sosmed');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Sosmed.Content.Edit');

			if ($this->save_sosmed('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('sosmed_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'sosmed');
				
				$passtwitter="";
				if($this->input->post('sosmed_password_twitter')!=""){
				$passtwitter="Password Twitter telah diganti";
				}
				$passfb="";
				if($this->input->post('sosmed_password_fb')!=""){
				$passfb="Password Facebook telah diganti";
				}
				
					Template::set_message(lang('sosmed_edit_success')." ".$passtwitter." ".$passfb, 'success');
			redirect(SITE_AREA .'/content/sosmed/edit/'.$id);
			}
			else
			{
				Template::set_message(lang('sosmed_edit_failure') . $this->sosmed_model->error, 'danger');
			}
		}
			Template::set("upload_path_image",$this->upload_config['upload_path_image']);
		Template::set('sosmed', $this->sosmed_model->find($id));
	Template::set('toolbar_title', lang('sosmed_edit') . ' Informasi Profile dan Sosial Media');
		Template::set_view("create");
		Template::render();
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_sosmed($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}
		
			$edit=$this->sosmed_model->find($id);
		
		#Images Library Config
	
		$this->load->library('image_lib');
		
		$this->form_validation->set_rules('sosmed_username_twitter','Username Twitter','max_length[30]');
		$this->form_validation->set_rules('sosmed_name_twitter','Name Twitter','max_length[40]');
		$this->form_validation->set_rules('sosmed_password_twitter','Password Twitter','max_length[40]');
		$this->form_validation->set_rules('sosmed_url_twitter','Url Twitter','max_length[300]');
		$this->form_validation->set_rules('sosmed_username_fb','Username Fb','max_length[255]');
		$this->form_validation->set_rules('sosmed_name_fb','Name Fb','max_length[255]');
		$this->form_validation->set_rules('sosmed_password_fb','Password Fb','max_length[255]');
		$this->form_validation->set_rules('sosmed_url_fb','Url Fb','max_length[255]');
		$this->form_validation->set_rules('sosmed_nama_perusahaan','Nama Perusahaan','');
		$this->form_validation->set_rules('sosmed_alamat','Alamat','');
		$this->form_validation->set_rules('sosmed_telp','Telp','max_length[12]');
		$this->form_validation->set_rules('sosmed_pin_bb','Pin Bb','max_length[13]');
		$this->form_validation->set_rules('sosmed_whatapps','Whatapps','max_length[255]');
		$this->form_validation->set_rules('sosmed_fax','Fax','max_length[14]');
		$this->form_validation->set_rules('sosmed_google_map','Google Map','');
		$this->form_validation->set_rules('sosmed_token_twitter','Token Twitter','');
		$this->form_validation->set_rules('sosmed_token_fb','Token Fb','');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		
		
		$data = array();
		
		// make sure we only pass in the fields we want
		if($this->input->post('sosmed_password_twitter')!=""){
		$data['password_twitter']        = md5($this->input->post('sosmed_password_twitter'));
		}
		if($this->input->post('sosmed_password_fb')!=""){
		$data['password_fb']        = md5($this->input->post('sosmed_password_fb'));
		}
		$data['username_twitter']        = $this->input->post('sosmed_username_twitter');
		$data['name_twitter']        = $this->input->post('sosmed_name_twitter');
		
		$data['url_twitter']        = $this->input->post('sosmed_url_twitter');
		$data['username_fb']        = $this->input->post('sosmed_username_fb');
		$data['name_fb']        = $this->input->post('sosmed_name_fb');
		
		$data['url_fb']        = $this->input->post('sosmed_url_fb');
		$data['nama_perusahaan']        = $this->input->post('sosmed_nama_perusahaan');
		$data['alamat']        = $this->input->post('sosmed_alamat');
		$data['telp']        = $this->input->post('sosmed_telp');
		$data['pin_bb']        = $this->input->post('sosmed_pin_bb');
		$data['email']        = $this->input->post('email');
		$data['whatapps']        = $this->input->post('sosmed_whatapps');
		//$data['logo']        = $this->input->post('sosmed_logo');
		$data['fax']        = $this->input->post('sosmed_fax');
		$data['google_map']        = $this->input->post('sosmed_google_map');
		$data['token_twitter']        = $this->input->post('sosmed_token_twitter');
		$data['token_fb']        = $this->input->post('sosmed_token_fb');
		
		$data['bank_mandiri']        = $this->input->post('bank_mandiri');
		$data['bank_bca']        = $this->input->post('bank_bca');
		$data['bank_bni']        = $this->input->post('bank_bni');
		$data['bank_bri']        = $this->input->post('bank_bri');
		$data['paypal']        = $this->input->post('paypal');
		$data['an_bank_mandiri']        = $this->input->post('an_bank_mandiri');
		$data['an_bank_bca']        = $this->input->post('an_bank_bca');
		$data['an_bank_bni']        = $this->input->post('an_bank_bni');
		$data['an_bank_bri']        = $this->input->post('an_bank_bri');
		
		$data['meta_description']        = $this->input->post('meta_description');
		$data['meta_keyword']        = $this->input->post('meta_keyword');
		$data['meta_robots']        = $this->input->post('meta_robots');
		
		$data['google_plus_url']        = $this->input->post('google_plus_url');
		$data['thumblr_url']        = $this->input->post('thumblr_url');
		$data['pinterest_url']        = $this->input->post('pinterest_url');
		$data['instagram_url']        = $this->input->post('instagram_url');
		$data['linkedin_url']        = $this->input->post('linkedin_url');

		$data['hari_kerja']        = $this->input->post('hari_kerja');
		$data['tentang_perusahaan']        = $this->input->post('tentang_perusahaan');
		
		$attachment1 ='';
		#Upload Images
			
 		$config['upload_path'] = $this->upload_config['upload_path_image'];
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_width']  = '200';
		$config['max_height']  = '200';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if(@$_FILES['sosmed_logo']['name'] != '') { 
		
		$upload = $this->upload->do_upload('sosmed_logo');
		
		$attachment1='';
		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
	
		else:
			$this->session->unset_userdata('upload_session_image');
			$imgs = $this->upload->data();
			$attachment1 = $imgs['file_name'];
			
			 //identitas file asli
 			 $im_src = imagecreatefromjpeg($imgs['full_path']);
  			 $src_width = imageSX($im_src);
 			 $src_height = imageSY($im_src);

  			//Simpan dalam versi small 110 pixel
 			 //Set ukuran gambar hasil perubahan
 		 	$width = 110;
 		 	$height = ($width/$src_width)*$src_height;
			create_thumb($imgs['full_path']);
			resize_image($imgs['full_path'], $width, $height);
			
			if($type == 'update'){
				@unlink($config['upload_path'].$edit->logo); 
				#Delete Semua Thumb Terpaut
			 	  $linksArray=explode('.', $edit->logo);
 					$links= array_filter($linksArray);
					if(!empty($links)){
					  $the = $links[0]."_thumb.".$links[1];	
					}
		    	@unlink($config['upload_path'].$the); 
			}
		$data['logo'] = $attachment1;	

		endif;
		
		
		}


		$attachment2 ='';
		#Upload Images
			
 		$config2['upload_path'] = $this->upload_config['upload_path_image'];
		$config2['allowed_types'] = 'jpg|jpeg|png';
		$config2['max_width']  = '200';
		$config2['max_height']  = '200';
		$this->load->library('upload', $config2);
		$this->upload->initialize($config2);
		
		if(@$_FILES['sosmed_favicon']['name'] != '') { 
		
		$upload = $this->upload->do_upload('sosmed_favicon');
		
		$attachment2='';
		if($upload==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
	
		else:
			$this->session->unset_userdata('upload_session_image');
			$imgs = $this->upload->data();
			$attachment2 = $imgs['file_name'];
			
			if($type == 'update'){
				@unlink($config2['upload_path'].$edit->favicon); 
				
			}
		$data['favicon'] = $attachment2;	

		endif;
		
		
		}


			$attachment2 ='';
		#Upload Images
			
 		$config3['upload_path'] = $this->upload_config['upload_path_image'];
		$config3['allowed_types'] = 'jpg|jpeg|png|ico|gif';
		$config3['max_width']  = '1000';
		$config3['max_height']  = '300';
		$this->load->library('upload', $config3);
		$this->upload->initialize($config3);
		
		if(@$_FILES['header']['name'] != '') { 
		
		$upload3 = $this->upload->do_upload('sosmed_favicon');
		
		$attachment3='';
		if($upload3==FALSE):
			$this->session->set_userdata(array("upload_session_image"=>$this->upload->display_errors()));
	
		else:
			$this->session->unset_userdata('upload_session_image');
			$imgs = $this->upload->data();
			$attachment3 = $imgs['file_name'];
			
			
		$data['header'] = $attachment3;	

		endif;
		
		
		}

		if ($type == 'insert')
		{
			$id = $this->sosmed_model->insert($data);

			if (is_numeric($id))
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
			$return = $this->sosmed_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}