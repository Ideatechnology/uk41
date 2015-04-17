<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


function image_thumb($gambar=""){if($gambar!=""){	$thumimage=explode(".",$gambar);	return $thumimage[0]."_thumb.".$thumimage[1];}else{	return $gambar;}}	function image_thumb_medium($gambar=""){if($gambar!=""){	$thumimage=explode(".",$gambar);	return $thumimage[0]."_medium.".$thumimage[1];}else{	return $gambar;}}function image_thumb_small($gambar=""){if($gambar!=""){	$thumimage=explode(".",$gambar);	return $thumimage[0]."_small.".$thumimage[1];}else{	return $gambar;}}		
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
    }		function resize_image($file, $width, $height)    {		$ci =& get_instance();				$config['image_library'] = 'gd2';        $config['source_image'] =$file;        $config['maintain_ratio'] = FALSE;        $config['width']  = $width;        $config['height'] = $height;    		$ci->image_lib->initialize($config);        $ci->image_lib->resize();           $ci->image_lib->clear();                $ci->session->set_flashdata('resize_error', $ci->image_lib->display_errors());      }				function UploadImage($path,$fupload_name,$fupload_tempname,$widthsmall,$widthmedium){  //direktori gambar  $vdir_upload = $path;  $vfile_upload = $vdir_upload . $fupload_name;  //Simpan gambar dalam ukuran sebenarnya  move_uploaded_file($fupload_tempname, $vfile_upload);  //identitas file asli  $im_src = imagecreatefromjpeg($vfile_upload);  $src_width = imageSX($im_src);  $src_height = imageSY($im_src);  //Simpan dalam versi small 110 pixel  //Set ukuran gambar hasil perubahan  $dst_width =$widthsmall;  $dst_height = ($dst_width/$src_width)*$src_height;  //proses perubahan ukuran  $im = imagecreatetruecolor($dst_width,$dst_height);  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);  //Simpan gambar  $thumimage1=explode(".", $fupload_name);  imagejpeg($im,$vdir_upload .$thumimage1[0]."_small.".$thumimage1[1]);    //Simpan dalam versi medium 360 pixel  //Set ukuran gambar hasil perubahan  $dst_width2 = $widthmedium;  $dst_height2 = ($dst_width2/$src_width)*$src_height;  //proses perubahan ukuran  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);  //Simpan gambar   $thumimage2=explode(".", $fupload_name);  imagejpeg($im2,$vdir_upload .$thumimage2[0]."_medium.".$thumimage2[1]);    //Hapus gambar di memori komputer  imagedestroy($im_src);  imagedestroy($im);  imagedestroy($im2);}
?>