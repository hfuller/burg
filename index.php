<?php
require_once("burg.include.php");
$length = intval($_REQUEST["length"]);
if ( $length > 0 ) {
	$burg = burg($length);
} else {
	$burg = burg();
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
				<input name="length" value="7">
				<button type="submit">do it</button>
			</fieldset>
		</form>
	</body>
</html>

