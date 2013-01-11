<?php
	require_once("class.inputfilter.php");
	$ifilter = new InputFilter();
	$_POST = $ifilter->process($_POST);
	echo $_POST['texto'];
?>
