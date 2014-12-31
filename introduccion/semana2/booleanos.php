<html lang="es">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
	<title>Booleanos</title>
</head>
<body>
	<?php
		$var1 = true;
		$var2 = false;
		$var3 = null;

		echo "var1 = ".$var1."<br>";
		echo "var2 = ".$var2."<br>";
		echo "var3 = ".$var3."<br>";

		echo "isset = ".isset($var2)."<br>";

		echo "empty = ".empty($var1)."<br>";

		unset($var1);
		echo "empty = ".empty($var1);


	?>

</body>
</html>