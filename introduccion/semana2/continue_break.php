<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Continue - Break</title>
    </head>
    <body>
        <?php
            echo "Continue <br/>";
            
            for( $k = 0 ; $k < 10 ; $k ++ ) {
                if ( $k == 5) {
                    continue; // No ejecuta las intrucciones despues de este if cuando se cumple la condicion y sigue sumando en $k
                }
                echo $k . "<br/>";
            }
            
            echo "Break <br/>";

            for( $k = 20 ; $k < 30 ; $k ++ ) {
                if ( $k == 25) {
                    break; // Cuando se cumple la condicion obliga a finalizar el bucle.
                }
                echo $k . "<br/>";
            }
        ?>
    </body>
</html>
