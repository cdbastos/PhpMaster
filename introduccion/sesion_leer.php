<?php session_start(); ?>
<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <meta charset="UTF-8">
        <title>Leer datos de la sesion</title>
    </head>
    <body>
        <?php
        if( isset ($_SESSION["nombre"] ) && isset( $_SESSION["apellido"]) ) {
            echo $_SESSION["nombre"] . " " . $_SESSION["apellido"];
        }
        ?>
    </body>
</html>
