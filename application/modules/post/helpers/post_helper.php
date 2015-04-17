<?php

function jumlah_komentar($id){

  $ci =& get_instance();
  $literal = $ci->db->query('select count(*) as jumlah from bf_comments where kolom_posts="'.$id.'"')->row();
  return  $literal->jumlah;
	
}

function images_thumbnail($data){

$pecah=explode(".",$data);

$images=$pecah[0]."_thumb.".$pecah[1];

return $images;

}

?>
