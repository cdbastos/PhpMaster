<!--
 Autor: Cristian Dario Bastos
 twitter: @cdbastos
 2014
-->

<?php
    //se crea la clase 
    class Maquina {
        // constructor
        function __construct() {
            echo "La máquina se ha encendido";
        }
        
        //destructor
        function __destruct() {
            echo "La maquina se ha apagado";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Constructores y destructores</title>
    </head>
    <body>
        <?php
        // crea un nuevo objeto
        $m = new Maquina() ;
       
        echo "<br>";
        // lo destruye
        unset ($m);
        ?>
    </body>
</html>
