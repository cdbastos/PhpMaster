<!doctype html>
<!-- Cristian Dario Bastos -->
<html lang="es">
<head>
    <link rel="stylesheet" href="./css/normalize.css" />
    <title>Funciones para tipos de datos</title> 
</head>
<body>
    <h2>Funciones de PHP para probar los tipos de dato de las variables</h2>
    <?php
        $decimal = 2.51;
        echo $decimal;
        echo "<br>";
        echo round($decimal); // redondea un decimal a entero
        echo "<br>";
        echo ceil($decimal); // redondea al entero superior mas cercano
        echo "<br>";
        echo floor($decimal); // redondea al entero inferior mas cercano
        echo "<br>";
        echo abs(-254); // obtiene el valor absoluto de un numero
        echo "<br>";
        echo pow(2,4); // eleva un numero a una potencia
        echo "<br>";
        echo sqrt(81); // obtiene la raiz cuadrada de un numero
        echo "<br>";
        echo fmod(20,8); // obtiene el residuo de una division entera
        echo "<br>"; 
        echo rand(); // obtiene un numero aleatorio
        echo "<br>";
        echo rand(1,10); // obtiene on numero aleatorio dentro de  un rango especificado
        echo "<br>";
    ?>
    <p> prueba de sincronizacion </p>
</body>
</html>
