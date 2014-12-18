<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Convertidor Dolares a euros</title>
    </head>
    <body>
        <?php
        define('EURO', 2800);
        $dolares = 17;
        
        $euros = EURO * $dolares;
        echo $dolares." dolares americanos equivalentes en euros son: ".$euros;
        ?>
    </body>
</html>
