<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ejemplo de XSS</title>
	</head>
	<body>
	<?php echo $_POST['texto'];?>
	<a href="#">Click aqui</a>
	</body>
</html>