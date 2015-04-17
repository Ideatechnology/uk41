<?php

function formatUang($input) {
    	$result = ''; $revCount = 0;

    	for( $i = strlen($input) - 1; $i >= 0; $i-- ) {
    		if($revCount == 3) {
    			$result = '.'.$result;
    			$revCount = 0;
    		}
    		$char = substr( $input, $i, 1 );
    		$result = $char.$result;
    		$revCount++;
		}

    	$result = 'Rp '.$result;
    	return $result;
    }
    
 ?>

