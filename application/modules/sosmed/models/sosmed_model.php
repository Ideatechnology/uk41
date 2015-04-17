<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sosmed_model extends BF_Model {

	protected $table_name	= "sosmed";
	protected $key			= "id";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= false;
	protected $set_modified = false;
	
	public function getSosmed(){
	
	$row=$this->sosmed_model->find(1);
	return $row;
	
	}
	
}
