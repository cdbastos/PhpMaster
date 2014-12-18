<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
	<title>matrices 2</title>
</head>
<body>
	<?php

		$numeros = array(34,56,32,86,90,13);
		echo $numeros[2];
		echo "<br>";
		$numeros[2]=33;
		echo $numeros[2];
		echo "<br>";
	?>

	<?php
		$nombre = array('primer_nombre' => 'Cristian', 'segundo_nombre' => 'Dario');
		echo $nombre['segundo_nombre'];
		echo "<br>";
		$nombre ['segundo_nombre'] = 20;
		echo $nombre['segundo_nombre'];
		echo "<br>";
	?>

	<?php
		echo "Conteo de la matriz numeros: ".count($numeros);
		echo "<br> maximo: ".max($numeros);
		echo "<br> minimo: ".min($numeros)."<br>";
		sort($numeros);
		print_r($numeros);
		echo "<br>";
		rsort($numeros); 
		print_r($numeros);
		echo "<br>";
		echo $cadena =implode(" - ",$numeros);
		echo "<br>";
		print_r (explode(" - ",$cadena));
		echo "<br>";
		echo in_array(10,$numeros);

	?>
</body>
</html>