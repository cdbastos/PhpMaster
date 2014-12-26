<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Fechas y horas</title>
    </head>
    <body>
        <h2> Fecha con getdate </h2>
        <?php
            $date = getdate();
            foreach ( $date as $prefijo => $valor ) {
                echo $prefijo . " : " . $valor . "<br/>";
            }
        ?>
        <h2> Fecha con mktime (formato unix) </h2>
        <?php 
            $hoy = mktime();
            echo "Hora y fecha formato UNIX: " . $hoy . "<br/>";
            echo "Hora y fecha formato Humano: " . date("h:i a, l d, F - Y", $hoy);
        ?>
        
        <h3>Validar una fecha: </h3>
        <?php 
            if (checkdate(2, 27, 2014)) {
                echo 'Fecha valida';
            } else {
                echo 'Fecha invalida';
            }
        ?>
        
        <h3>gmdate</h3>
        <?php 
            $hora = mktime() ;
            echo gmdate('h:i a - d, M, Y',$hora);
        ?>
    </body>
</html>
