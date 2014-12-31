<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>For Each</title>
    </head>
    <body>
        <?php
            $numeros = array(5,6,7,8,3,2);
            foreach ( $numeros as $var ) {
                echo $var . "<br/>";
            }
            foreach ( $numeros as $indice => $valor) {
                echo "Números [$indice] = $valor <br/>";
            }
            $edades = array ( "maria" => 20, "pedro" => 15, "alfonso" => 30);
            foreach ( $edades as $clave => $valor) {
                echo ucfirst($clave) ." tiene $valor años. <br/>";
            }
        ?>
    </body>
</html>
