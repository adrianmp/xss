<?php
	require_once("class.inputfilter.php");
	$ifilter = new InputFilter(array('em', 'strong'));
	$_POST = $ifilter->process($_POST);
	echo $_POST['texto'];
?>
