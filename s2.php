<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ejemplo de XSS</title>
	</head>
	<body>
	<?php
		//metodos de filtrado
		//echo strip_tags($_GET['texto']);
		$filtrado="/<script>/i";
		if(!preg_match($filtrado, $_GET['texto']))
		{
			echo $_GET['texto'];
		}
		else
		{
			echo "Filtered";
		}
	?>
	<a href="#">Click aqui</a>
	</body>
</html>
