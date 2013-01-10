<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ejemplo de XSS</title>
	</head>
	<body>
		<form action="xss.php" method="post">
			<input name="texto" type="text"   value="" />
			<input type="submit" value="Enviar" name="Enviar">
		</form>
	</body>
</html>