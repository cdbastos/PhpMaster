<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Funciones 1</title>
    </head>
    <body>

        <?php
            function saludo ($persona) {
                echo "\nHola {$persona}!! Bienvenido. <br>";
            }
            
            $nombre = array(
                "Cristian", "Andres", "Claudia", "Mabel"
            );
            
            foreach ( $nombre as $persona ) {
                saludo($persona);
            }
        ?>
        
        <?php
            // definición de función
            // muestra el nombre del día de la semana
            function diaDeHoy(){
            echo "Hoy es " . date('l d, F', mktime());
            }
            // invocación de la función
            diaDeHoy();
            ?>

    </body>
</html>
