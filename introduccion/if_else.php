<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>If Else</title>
    </head>
    <body>
        <?php
            $var1 = 5;
            echo ( $var1 < 0) ? $var1 . " es un numero negativo" : $var1 . " el numero es positivo o es cero";
            // El operador ternario ? selecciona el codigo a la izquierda del : si la condicion es verdadera, 
            // si la condicion es falsa selecciona lo que hay a la derecha del :
        ?>
        <br/>
        <?php 
        // los años biciestos son divisibles entre 400 o entre 4 pero no entre 100
            $año = 2012;
            
            if (( $año % 400 == 0 ) && (( $año % 100 != 0 ) || ( $año % 4 == 0 ))) {
                echo $año . " es un año biciesto ";
            } else {
                echo $año . " no es un año biciesto";
            }
        ?>
        <br/>
        <?php 
            // formar un numero:
            $var2 = 1094244671;
            echo number_format($var2, 0, ',', '.');
        ?>
    </body>
</html>
