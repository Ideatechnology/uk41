<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hasil_ujian_model extends BF_Model{
	
	protected $table_name="bf_hasil_ujian";
	
	protected $key = "id_hasil_ujian";
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

	function countIkutiUjian($id_user){
            
            $query = $this->db->query("select count(*) as jumlah from ".$this->table_name.""
                    . " where id_user='".$id_user."'")->row();
            
            return $query->jumlah;
            
        }
        
        function countIkutiUjianMobile($id_user,$id,$urutan){
            
            $query = $this->db->query("select count(*) as jumlah from ".$this->table_name." a inner join bf_ujian b on a.id_ujian=b.kode_ujian "
                    . " where a.id_user='".$id_user."' and b.urutan='".$urutan."' and a.id_ujian='".$id."'")->row();
            
            return $query->jumlah;
            
        }
        
        function countIkutiUjianMobileUrutan($id_user,$id){
            
            $query = $this->db->query("select b.urutan as jumlah from ".$this->table_name." a inner join bf_ujian b on a.id_ujian=b.kode_ujian "
                    . " where a.id_user='".$id_user."' and a.id_ujian='".$id."'")->row();
            
          
            return @$query->jumlah?$query->jumlah:0;
               
                
        }
        
       
        
         public function getScore($user_id,$parent){
            
            $query="SELECT sum(score) as score FROM bf_hasil_ujian a "
                    . " inner join bf_ujian b on a.id_ujian=b.kode_ujian "
                    . " where a.id_user='".$user_id."' and b.parent_id='".$parent."'";
            
            $row = $this->db->query($query)->row();
            return @$row->score?$row->score:0; 
            
        }
        
        
        
        function update($data,$id=array()){
            
            return $this->db->where($id)->update($this->table_name,$data);
            
        }
        
        function countIkutiUjianMobile2($id_user,$id){
            
            $query = $this->db->query("select count(*) as jumlah from ".$this->table_name." a"
                    . " where a.id_user='".$id_user."' and a.id_ujian='".$id."'")->row();
            
            return $query->jumlah;
            
        }
        
        public function ikutiUjian($id_user){
            
            $query = $this->db->query("select b.kode_ujian,b.pembayaran,b.created_on,b.judul_ujian,b.keterangan from ".$this->table_name." a"
                    . " inner join bf_ujian b on a.id_ujian=b.kode_ujian order by a.tanggal desc"
                    . " ")->result_array();
            return $query;
            
            
        }
        
        public function getHasilUjian($id_user,$id_ujian){
            
            $query = $this->db->where(array("id_user"=>$id_user,"id_ujian"=>$id_ujian))
                              ->get($this->table_name)->row();
            return $query;
            
        }
	
	
}



?>