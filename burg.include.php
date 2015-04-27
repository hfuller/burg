<?php
function burg($length = 7) {

	$str = "Yeah man forreal forreal totes ";

	$f_contents = file_get_contents("yeahmanforrealforrealtotes.txt");
	$burgs = explode("\n",$f_contents);
	while ( $burgs[count($burgs)-1] === "" ) {
		array_pop($burgs); //php always puts an empty line as the last entry in the array even if the file does not end in an empty line!!!
	}
	shuffle($burgs);
	for ( $i = 0; $i < $length; $i++ ) {
		$str .= array_pop($burgs) . " ";
	}

	return $str;
	
}
?>
