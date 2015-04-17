<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ujian_model extends BF_Model{
	
	protected $table_name="bf_ujian";
	
	protected $key = "kode_ujian";
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "created_on";
	protected $modified_field = "modified_on";

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
		array(
			"field"		=> "judul_ujian",
			"label"		=> "judul_ujian",
			"rules"		=> "required|max_length[255]"
		),
                array(
			"field"		=> "judul_ujian",
			"label"		=> "judul_ujian",
			"rules"		=> "required|max_length[255]"
		),
		
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;

	
	
	protected $kolom= array("kode_ujian"=>"Kode Ujian",
                                "judul_ujian"=>"Nama Ujian",
                                "keterangan"=>"Keterangan",
                                "nilai_kelulusan"=>"Presentase Kelulusan",
                                "durasi_waktu"=>"Durasi Waktu",
                                "is_active"=>"Status Publish",
                                "jumlah_soal"=>"Jumlah Soal",
                                "pembayaran"=>"Pembayaran"
							);
	
        
        //get parent
        function getParent(){
            
            return $this->db->where("parent_id",0)->get($this->table_name);
            
        }
						
	//untuk mendapatkan field
	function getField()
	{
		$this->load->helper("array_objek");
 		return convert_array_obj($this->kolom);
	}
	
	//kode otomatis 
	function getKodeUjian(){
		
        $q = $this->db->query("select MAX(RIGHT(".$this->key.",2)) as code_max from ".$this->table_name);
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_max)+1;
				$code = $tmp;
            }
        }else{
            $code = "1";
        }
		$bikin_kode = str_pad($code, 2, "0", STR_PAD_LEFT);
        return "UJN/".date("Y")."/".$bikin_kode;
    }
	
        //get ujian dan publish
        public function getDataAllPublish($parent=0){
            
                $filter = $this->input->get('filter');
                $offset = $this->input->get('per_page');

                $limit = $this->settings_lib->item('site.list_limit');
                  
		$this->db->select("*");
							
		  $this->db->from($this->table_name);
                  
                  if($filter){
                      $this->db->like("judul_ujian",$filter);
                      $this->db->or_like("keterangan",$filter); 
		  }
                  
                  $this->db->order_by("urutan","asc");
                  $this->db->limit($limit, $offset);
                   $this->db->where("parent_id",$parent);
                  $this->db->where("is_active",1);
		  $query = $this->db->get();
		  
		  return $query->result_array();
            
        }
        
              public function getDataAllPublishMobile($parent=0){
            
                   
		$this->db->select("*");
							
		  $this->db->from($this->table_name);
                  
                
                  $this->db->order_by("urutan","asc");
                  $this->db->where("is_active",1);
                  $this->db->where("parent_id",$parent);
		  $query = $this->db->get();
		  
		  return $query->result_array();
            
        }
    
	//quuery untuk get data all
	public function getDataAll($parent=0){
		
		  $filter = $this->input->get('filter');
                  
                  $offset = $this->input->get('per_page');

                  $limit = $this->settings_lib->item('site.list_limit');
                  
		  $this->db->select("kode_ujian,
                                     judul_ujian,
                                     is_active,
                                     nilai_kelulusan,
                                     durasi_waktu,
                                     pembayaran,
                                     jumlah_soal,
                                     parent_id,
                                     urutan
                                    ");
							
		  $this->db->from($this->table_name);
		  $this->db->where("parent_id",$parent);
		  if($filter){
		  $this->db->like("judul_ujian",$filter);
                  $this->db->or_like("is_active",$filter);
                  $this->db->or_like("nilai_kelulusan",$filter);
                  $this->db->or_like("durasi_waktu",$filter);  
                  $this->db->or_like("pembayaran",$filter); 
		  }
		  $this->db->limit($limit, $offset);
                  $this->db->order_by("urutan,parent_id,judul_ujian","asc");
		  $query = $this->db->get();
		  
		  return $query->result_array();
	  
	}
        
        
        //quuery untuk get count all
	public function getDataAllCount($parent=0){
		
		  $filter = $this->input->get('filter');
                     
                  $this->db->from($this->table_name);
		  $this->db->where("parent_id",$parent);
		  if($filter){
		  $this->db->like("judul_ujian",$filter);
                  $this->db->or_like("is_active",$filter);
                  $this->db->or_like("nilai_kelulusan",$filter);
                  $this->db->or_like("durasi_waktu",$filter);  
                  $this->db->or_like("pembayaran",$filter); 
		  }
		  $query = $this->db->count_all_results();
		  
		  return $query;
	  
	}
        
        
        //quuery untuk get data all count publish
	public function getDataAllCountPublish($parent=0){
		
		  $filter = $this->input->get('filter');
                     
                  $this->db->from($this->table_name);
		   $this->db->where("parent_id",$parent);
		  if($filter){
		  $this->db->like("judul_ujian",$filter);
                  $this->db->or_like("keterangan",$filter);
                  }
                  $this->db->where("is_active",1);
		  $query = $this->db->count_all_results();
		  
		  return $query;
	  
	}
	
        //status active
        public function statusActive($status){
            
            if($status==0){
                return "<span class='label label-danger'>Draft</span>";
                    
            }else{
                return "<span class='label label-success'>Published</span>";
            }
            
        }
        
        public function update($id,$data=array()){
            
            $this->db->where(array($this->key=>$id));
            return $this->db->update($this->table_name,$data);
            
        }
        
        public function cekFreePrice($data,$tipe="desktop"){
            
            if($tipe=="desktop")
                $style="width:64px;margin-right:10px;float:left";
            else
                $style="width:64px;left:5px;top:5px";
                
            
            if($data == 0){
                
                return "<img src='".Template::theme_url("images/free.png")."' style='".$style."'>";
                
            }else{
                
                return "<img src='".Template::theme_url("images/price.png")."' style='".$style."' class='pull-left'>";
                
            }
            
        }
	
	
	
	
}



?>
