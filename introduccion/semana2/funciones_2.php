<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Funciones 2</title>
    </head>
    <body>
        <?php
        define("TIPO_DE_CAMBIO", 1.35);

        function euros_a_dolares($cant_euros) {
            $cant_dolares = $cant_euros * TIPO_DE_CAMBIO;
            return $cant_dolares;
        }
        $conversion = euros_a_dolares(125.3);
        echo $conversion . "<br>";
        ?>

        <?php
            // define función
            // calcula el promedio de los valores proporcionados
            function calPromedio(){
            $args = func_get_args();
            $cuenta = func_num_args($args);
            $suma = array_sum($args);
            $prom = $suma / $cuenta;
            
            return $prom;
            }
            // invoca la función
            // con 3 argumentos
            // datos de salida: 6
            echo CalPromedio(3,6,9). "<br>";
            // invoca la función
            
            // con 8 argumentos
            // datos de salida: 150
            echo CalPromedio(100,200,100,300,50,150,250,50) . "<br>";
            ?>
        
        <?php 
            function saludo ($dirigido_a = "Mundo") {
                echo "Hola " . $dirigido_a . "!!!" . "<br>";
            }
            
            saludo ();
        ?>

    </body>
</html>