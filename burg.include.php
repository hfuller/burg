<?php
function burg($length = 9) {

	$str = "Yeah man forreal forreal totes ";

	if ( $length > 0 ) {
		$str .= "dawg ";
		$length--;
	}
	if ( $length > 0 ) {
		$str .= "supreme ";
		$length--;
	}
	if ( $length > 0 ) {

		$f_contents = file_get_contents("yeahmanforrealforrealtotes.txt");
		$burgs = explode("\n",$f_contents);
		while ( $burgs[count($burgs)-1] === "" ) {
			array_pop($burgs); //php always puts an empty line as the last entry in the array even if the file does not end in an empty line!!!
		}
		shuffle($burgs);
	
		if ( $length >= count($burgs) ) {
			$length = 0;
		}
	
		for ( $i = 0; $i < $length; $i++ ) {
			$str .= array_pop($burgs) . " ";
		}
	
	}
	
	return trim($str);
	
}
?>
