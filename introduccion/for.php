<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>For</title>
    </head>
    <body>
        <?php

            for ( $var = 20 ; $var > 10 ; $var -= 2) {
                echo $var . "<br/>" ;
            }
            echo "Valor final: " . $var ;
        ?>
    </body>
</html>
