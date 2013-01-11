<?php		
		$filtrado="/<script>/i";
		//echo preg_match($filtrado, $_REQUEST['texto']);
		if(!preg_match($filtrado, $_POST['texto']))
		{
			echo $_POST['texto'];
		}
		else
		{
			echo "Filtered";
		}
?>
<a href="#">Click aqui</a>
