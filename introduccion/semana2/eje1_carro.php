<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Confirmacion auto</title>
    </head>
    <body>
        <h2>Exito</h2>
        <?php
            $color=$_POST["txtColor"];
            $tipo=$_POST["tipo"];
            echo "Tu $tipo $color está listo. Maneja con cuidado.";
        ?>
    </body>
</html>
