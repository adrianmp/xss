<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ejemplo de XSS</title>
	</head>
	<body>
	<a href='s2.php?texto=HOLA<script>window.onload = function(){ 
	var AllLinks=document.getElementsByTagName("a");
	AllLinks[0].href = "hola.txt"; } </script>'>aqui </a>
		<form action="xss.php" method="POST">
			<input name="texto" type="text"   value="" />
			<input type="submit" value="Enviar" name="Enviar">
		</form>
	
	</body>
</html>
