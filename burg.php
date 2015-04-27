#!/usr/bin/env php
<?php require_once("burg.include.php");
if ( intval($argv[1]) > 0 ) {
	echo(burg(intval($argv[1])));
} else {
	echo(burg());
}
?>

