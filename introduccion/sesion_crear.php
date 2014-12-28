<?php session_start(); ?>
<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title> Crear sesiones </title>
    </head>
    <body>
        <p>Sesion creada correctamente</p>
        <?php
            $_SESSION["nombre"] = "Cristian";
            $_SESSION["apellido"] = "Bastos";
        ?>
    </body>
</html>
