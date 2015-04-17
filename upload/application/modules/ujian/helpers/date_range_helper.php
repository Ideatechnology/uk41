<?php

function explodedaterange($value,$type){
	$data=explode('-',$value,4);
	if($type=="first"){
		return $data[0]."-".$data[1]."-".$data[2];
	}else{
		return $data[3];
	}
}



?>


