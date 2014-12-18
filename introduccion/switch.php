<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Sentencia switch</title>
    </head>
    <body>
        
        <?php
            $var1 = 2;
            switch ( $var1 ) 
            {
            case 0:
                echo "var 1 es igual a 0";
                break;
            case 1: 
                echo "var 1 es igual a 1";
                break;
            case 2: 
                echo "var 1 es igual a 2";
                break;
            case 3:
                echo "var 1 es igual a 3";
                break;
            default : 
                echo "var 1 es distino a 0 1 2 3";
            }
        ?>
    </body>
</html>
