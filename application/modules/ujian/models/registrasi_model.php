<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_model extends BF_Model{
	
	protected $table_name="bf_registrasi_ujian";
	
	protected $key = "id_registrasi_ujian";
	protected $set_created	= false;
	protected $set_modified = false;
	
	/*
		Customize the operations of the model without recreating the insert, update,
		etc methods by adding the method names to act as callbacks here.
	 */
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 		= array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	/*
		For performance reasons, you may require your model to NOT return the
		id of the last inserted row as it is a bit of a slow method. This is
		primarily helpful when running big loops over data.
	 */
	protected $return_insert_id 	= TRUE;

	// The default type of element data is returned as.
	protected $return_type 			= "object";

	// Items that are always removed from data arrays prior to
	// any inserts or updates.
	protected $protected_attributes = array();
	
	/*
		You may need to move certain rules (like required) into the
		$insert_validation_rules array and out of the standard validation array.
		That way it is only required during inserts, not updates which may only
		be updating a portion of the data.
	 */
	protected $validation_rules 		= array(
	
		
	);
	protected $insert_validation_rules = array();
	protected $skip_validation 	= TRUE;

	
	public function checkRegistrasi($id_user,$id_ujian){
            
            $check = $this->registrasi_model->count_by(array("id_user"=>$id_user,"id_ujian"=>$id_ujian));
            if($check > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        
        public function cekStatus($data){
            
            if($data==0){
                
                return "<span class='label label-danger'>Not Approve</span>";
                
            }else{
                
                return "<span class='label label-success'>Approve</span>";
                
            }
            
        }
        
     
        
        public function checkPembayaran($id_user,$id_ujian){
            
            $check = $this->registrasi_model->count_by(array("status"=>1,"id_user"=>$id_user,"id_ujian"=>$id_ujian));
            if($check > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
	
	
}



?>