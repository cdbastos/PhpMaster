<!DOCTYPE html>
<!--
 Autor: Cristian Dario Bastos
 twitter: @cdbastos
 2014
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/normalize.css" />
        <title>Conectar a DB</title>
    </head>
    <body>
        <?php
        // conecta al servidor
        $conexion = mysql_connect("localhost", "admin", "admin");
        // valida la conexion al servidor
        echo "\n";
        if ( ! $conexion ) {
            die ("No se ha podido conectar al servidor MySQL") . mysql_error();
        } else {
            echo "Se ha conectado al servidor MySQL correctamente\n";
            echo "<br/>";
        }
       
        // conecta a la base de datos
        $bd_select = mysql_select_db("libreria",$conexion);
        
        // valida la conexion a la db
        if ( ! $bd_select ) {
            die ("No se ha podido conectar a la base de datos Libreria") . mysql_error();
        } else {
            echo "Se ha conectado a la base de datos Libreria correctamente\n";
            echo "<br/>";
        }
        
        // realiza una consulata a la base de datos
        $result = mysql_query("SELECT * FROM vendedores",$conexion);
        
        //imprime el resultado
        //se puede llamar a cada dato como array asociativo o por su indice
        while ( $fila = mysql_fetch_array($result) ) {
            echo "Nombre: " .$fila["nombre"] . ", Edad: " . $fila["edad"] . " años, País: " . $fila["pais"] . "<br>";
        }
        
        //se cierra la conexion a la base de datos
        mysql_close($conexion);
        ?>
    </body>
</html>
