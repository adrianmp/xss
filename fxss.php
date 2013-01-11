<?php
	//metodos de filtrado
	$filtrado = "/<script[^>]+scr/i";
	if(preg_match($filtrado, $_GET['var']))
	{
		echo "Filtered";
		return;
	}
?>
