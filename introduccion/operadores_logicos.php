<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Operadores lógicos</title>
    </head>
    <body>
        <?php
            $var1 = 5.1;
            $var2 = 10;
            $var3 = 3;
            
            if( ($var1 > $var2) && ($var1 > $var3) )
            {
                echo "var1 es la mayor";
            } else {
                echo "var1 no es la mayor";
            }
            
            if(!is_int($var1)) {
                echo "<br> var1 no es entero";
            }
            
            
        ?>
    </body>
</html>
