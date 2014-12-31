<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Punteros</title>
    </head>
    <body>
        <?php
            // Punteros en una matriz 
            $numeros = array (1,2,3,4,5,6,7,8,9,10);
            
            while ( $elemento = current($numeros)) { // current es el puntero dentro de la matriz 
                echo $elemento . "<br/>";
                next($numeros); // pasa al proximo elemento dentro de la matriz 
            }
            
            
        ?>
    </body>
</html>
