<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
	<title>Matrices</title>
</head>
<body>
	<?php
		$nombre = array('Cristian','Dario','Bastos',25);
		echo $nombre[1];
	?>
	<br>
	<?php
		$matris1 = array(1,2,3,4,array(5,6,7));
		echo $matris1[4][1];
	?>
	<br>
	<?php
		$asociativa = array('primer_nombre' => 'Thomas', 'segundo_nombre' => 'Dario');
		echo $asociativa['primer_nombre'];
	?>
	<br>
</body>
</html>