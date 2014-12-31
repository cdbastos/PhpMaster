<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
	<title>conversion de variables</title>
</head>
<body>
<?php 
	$var1=10;
	echo $var1."<br>";
	echo gettype($var1)."<br>";
	settype($var1,'string');
	echo gettype($var1)."<br>";
?>
</body>
</html>