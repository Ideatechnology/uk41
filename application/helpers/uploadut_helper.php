<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


function image_thumb($gambar=""){
function create_thumb($file)
    {
 		$ci =& get_instance();
		
		$config['image_library'] = 'gd2';
        $config['source_image']    =  $file ;
        $config['maintain_ratio'] = FALSE;
        $config['create_thumb'] = TRUE;
         
        $ci->image_lib->initialize($config); 
        $ci->image_lib->resize();
        $ci->image_lib->clear();
        
        $ci->session->set_flashdata('thumb_error', $ci->image_lib->display_errors());  
    }
?>