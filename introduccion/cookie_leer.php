<!--Se elimina la cookie edad asignandole un valor de 0 y de duracion negativo-->
<?php setcookie("edad", 0, time()-60); ?>

<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Leer cookie</title>
    </head>
    <body>
        <?php
            if ( isset ($_COOKIE ["edad"] ) ) {
                // pregunta si existe una cookie edad
                $edad = $_COOKIE["edad"] ;
                echo $edad;
            }
        ?>
    </body>
</html>
