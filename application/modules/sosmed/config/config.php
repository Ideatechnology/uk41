<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$tmp_bonfire_version_numeric = preg_replace("/[^0-9,.]/", "", BONFIRE_VERSION);
$config['module_config'] = array(
	'description'	=> 'Sosial Media & Info Company',
	'name'		=> 'Profile Web',
	'version'		=> '0.0.1',
	'author'		=> 'Harry Ridwan Ramadan'
);

$tmp_module_path = ($tmp_bonfire_version_numeric >= 0.7) ? "./application/modules/sosmed/": "/bonfire/modules/sosmed/";

$config['upload_config'] = array('upload_path_image'=> $tmp_module_path.'files/');