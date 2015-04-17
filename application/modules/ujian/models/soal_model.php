<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Soal_model extends BF_Model{
	
	protected $table_name="bf_soal";
	
	protected $key = "id";
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
		array(
			"field"		=> "question_name",
			"label"		=> "Soal",
			"rules"		=> "required"
		),
                array(
			"field"		=> "answer1",
			"label"		=> "Pilihan 1",
			"rules"		=> "required|max_length[255]"
		),
             array(
			"field"		=> "answer2",
			"label"		=> "Pilihan 2",
			"rules"		=> "required|max_length[255]"
		),
             array(
			"field"		=> "answer3",
			"label"		=> "Pilihan 3",
			"rules"		=> "required|max_length[255]"
		),
             array(
			"field"		=> "answer4",
			"label"		=> "Pilihan 4",
			"rules"		=> "required|max_length[255]"
		),
            array(
			"field"		=> "answer5",
			"label"		=> "Pilihan 5",
			"rules"		=> "required|max_length[255]"
		),
             array(
			"field"		=> "answer",
			"label"		=> "Jawaban",
			"rules"		=> "required|max_length[255]"
		),
            
		
	);
	protected $insert_validation_rules = array();
	protected $skip_validation 	= FALSE;

	
	
	protected $kolom= array("question_name"=>"Soal",
                                "answer1"=>"Pilihan A",
                                "answer2"=>"Pilihan B",
                                "answer3"=>"Pilihan C",
                                "answer4"=>"Pilihan D",
                                "answer5"=>"Pilihan E",
                                "answer"=>"Jawaban",
                                "option"=>"Pilihan",
                                "urutan"=>"No Urut"
                            );
							
						
	//untuk mendapatkan field
	function getField()
	{
		$this->load->helper("array_objek");
 		return convert_array_obj($this->kolom);
	}
        
        //get nilai pilihan
        function pilihan(){
        
            return array(1=>"Pilihan A",2=>"Pilihan B",3=>"Pilihan C",4=>"Pilihan D",5=>"Pilihan E");
        
        }
        //get maksimal urutan
        function getMaxUrutan($id){
            
            $q = $this->db->query("select urutan as code_max from ".$this->table_name." where ujian_id='".$id."'");
            $code = "";
            if($q->num_rows()>0){
                foreach($q->result() as $cd){
                    $tmp = ((int)$cd->code_max)+1;
                    $code = $tmp;
                }
            }else{
                $code = "1";
            }
        
            return $code;
            
        
        }
        
        //get isi soal status
        function checkStatusSoal($id_ujian){
            
            $this->load->model("ujian_model");
            $ujian=$this->ujian_model->find_by("kode_ujian",$id_ujian);
            $soal= $this->soal_model->count_by("ujian_id",$id_ujian);
            
            if($soal != $ujian->jumlah_soal){
                
                return "<span class='label label-danger'>Soal Belum Komplit</span>";
                
            }else{
                
                return "<span class='label label-success'>Soal Sudah Komplit</span>";
                
            }
            
        }
        
        //get value answer
        function getValueAnswer($data){
            
            switch($data){
                
                case 1:
                    $value="A";
                break;
            
                case 2:
                    $value="B";
                break;
            
                case 3:
                    $value="C";
                break;
            
                 case 4:
                    $value="D";
                break;
            
              case 5:
                    $value="E";
                break;
            
               
            }
            
            return $value;
        
        }
	
        function getHasilUjian($order){
            
            $query="select id,answer from ".$this->table_name." where id IN($order) ORDER BY FIELD(id,$order)";
            return $this->db->query($query);
            
        }
        
	
	
	
}



?>