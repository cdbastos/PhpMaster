<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Matrices anidadas</title>
    </head>
    <body>
        <h1>Matrices anidadas</h1>
        <?php
            $agenda = array ( // define una matriz agenda
                array( // define una matriz dentro de agenda
                    'nombre' => 'cristian bastos',
                    'direccion' => 'isla margarita',
                    'telefono' => '123456'
                    ),
                array(
                    'nombre' => 'andres gustavo',
                    'direccion' => 'penhouse santa marta',
                    'telefono' => '000000'
                ),
                array(
                    'nombre' => 'oscar javier',
                    'direccion' => 'la playa',
                    'telefono' => '5554466'
                )
            ); ?>
            
        <h2>Imprimiendo con bucle for </h2>
        
        <?php
            for( $i = 0 ; $i < count ( $agenda ) ; $i ++ ) {
                print_r ( $agenda [ $i ] ) ;
                echo  "<br/>" ;
            }
        ?>
        
        <h2>Imprimiendo con bucle foreach</h2>
        
        <?php
            foreach ( $agenda as $i => $contenido ) {
                // i es la posicion de cada sub-array del array agenda
                print_r ( $agenda [ $i ] ) ; // print_r imprime el contenido de la matriz en el indice i
                echo  "<br/>" ;
                foreach ( $contenido as $i => $valor ) { // asigna el primer valor d
                    echo $i . ": " . $valor . " - ";
                }
                echo  "<br/>" ;
            }
        ?>
        
        <!-- Dadas las calificaciones de un grupo
        guardadas en una matriz calcular el promedio general la cantidad de 
        estudiantes que se encuentran dentro del rango del 20% inferior 
        y 20% superior-->
        <h2>Obteniendo un promedio: </h2>
        
        <?php 
            $calificaciones = array (
                25, 64, 23, 87, 56, 38, 78, 57, 98, 95,
                81, 67, 75, 76, 74, 82, 36, 39,
                54, 43, 49, 65, 69, 69, 78, 17, 91
            );
            
            $cuenta = count ( $calificaciones );
            
            $total = $inf = $sup = 0;
            
            foreach ( $calificaciones as $nota ) {
                $total += $nota ;
                if ( $nota <= 20 ) {
                    $inf ++;
                }
                if ( $nota >= 80 ) {
                    $sup ++;
                }
            }
            
            $promedio = $total / $cuenta;
            
            //$promedioformat = number_format($promedio, 2, ',', '.');
            // especifica que le de 2 numeros despues de la coma y el separador de miles punto
            
            echo "El promedio de las " . $cuenta . " calificaciones es " . number_format($promedio, 2, ',', '.') . "<br/>" ;
            echo "El numero de calificaciones superiores al 20% es " . $sup . "<br/>" ;
            echo "El numero de calificaciones inferiores al 20% es " . $inf . "<br/>" ;
        ?>
        <h2>Eliminando elementos repetidos: </h2>
        
        <?php 
            $repetido = array (
                2, 2 , 3, 3, 4, 4, 5, 5, 6, 6
            );
            echo "<h3> Con elementos repetidos </h3>" ;
            foreach ( $repetido as $i => $num ) {
                echo $i . " => " . $num . "<br>" ;
            }
            
            $no_repetido = array_unique( $repetido ) ;
            sort( $no_repetido );
            
            echo "<h3> sin elementos repetidos </h3>" ;
            foreach ( $no_repetido as $i => $num ) {
                echo $i . " => " . $num . "<br>" ;
            }
        ?>
        


    </body>
</html>
