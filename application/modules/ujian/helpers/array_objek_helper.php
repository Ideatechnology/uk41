<?php

	function array_to_obj($array, &$obj)
  	{
    foreach ($array as $key => $value)
    {
      if (is_array($value))
      {
      $obj->$key = new stdClass();
      array_to_obj($value, $obj->$key);
      }
      else
      {
        $obj->$key = $value;
      }
    }
  return $obj;
  }

	
	
	function convert_array_obj($field)
	{
 		$array=$field;
		$object= new stdClass();
 		return array_to_obj($array,$object);
	}

?>