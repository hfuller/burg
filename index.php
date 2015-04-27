<?php
require_once("burg.include.php");
if ( array_key_exists("length",$_REQUEST) ) {
	$length = intval($_REQUEST["length"]);
	$burg = burg($length);
} else {
	$burg = burg();
	$length = "";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $burg ?></title>
	</head>
	<body>
		<?= $burg ?>
		<form>
			<fieldset>
				<label for="length">Length</label>
				<input name="length" value="<?= $length ?>">
				<button type="submit">do it</button>
			</fieldset>
		</form>
	</body>
</html>

