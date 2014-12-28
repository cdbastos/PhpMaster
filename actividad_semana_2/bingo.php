<?php 
    include "funciones.php";
?>
<!DOCTYPE html>
<!--
 Autor: Cristian Dario Bastos
 twitter: @cdbastos
 2014
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <link rel="stylesheet" href="estilo.css" />
        <title>Bingo Repetidos</title>
    </head>
    <body>
        <section>
            <h1>Bingo</h1>
            <?php
                $array = array();
                // declaro el vector para guardar lo introducido por el usuario

                foreach ( $_POST as $i => $valor) {
                    // introdusco los datos ingresados en un array
                    $array[$i] = $valor;
                }

                if (mayor($array) == false) {
                    // busca que todos los numeros mayores sean menores o iguales a 20
                    echo "Los numeros deben ser menores a 20";
                } else {
                    //obtiene una matriz con numeros aleatorios
                    $array_2 = aleatorio();
                    // obtine los elementos repetidos entre las dos matrices
                    $comun = buscar($array, $array_2); 
                    sort($comun); // ordena el array de menor a mayor
                    ?>

                    <table border='1'>
                        <tr>
                            <th colspan="6">Números al azar</th>
                        </tr>
                        <tr>
                            <?php
                                foreach ($array_2 as $valor) {
                                    echo "<td>" . $valor . "</td>" ;
                                }
                            ?>
                        </tr>
                        <tr>
                            <th colspan="6">Números elegidos</th>
                        </tr>
                        <tr>
                            <?php
                                foreach ($array as $valor) {
                                    echo "<td>" . $valor . "</td>" ;
                                }
                            ?>
                        </tr>
                        <tr>
                            <th colspan="6">Números comunes: <?php echo count($comun) ?></th>
                        </tr>
                        <tr>
                            <?php
                                foreach ($comun as $valor) {
                                    echo "<td>" . $valor . "</td>" ;
                                }
                            ?>
                        </tr>
                    </table>
               <?php }  ?>
        </section>
    </body>
</html>
