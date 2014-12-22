<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>While</title>
    </head>
    <body>
        <?php
            $var = 20; // Inicializando la variable
            while ( $var > 10 ) { // Definiendo la condicion
                echo $var . "<br/>" ;
                $var -= 2 ; // Actualizando la variable
            }
            echo "Valor final: " . $var ;
        ?>
    </body>
</html>
