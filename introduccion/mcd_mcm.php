<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Máximo comun divisor y minimo comun multiplo</title>
    </head>
    <body>
        <h1>Mínimo común multiplo y máximo común divisor</h1>
        <?php
        // El siguiente ejemplo invita al usuario a escribir dos números en un formulario Web 
        //para calcular el máximo común divisor (MCD) y el mínimo común múltiplo (mcm) de ambos.
        
        if ( ! isset ( $_REQUEST["submit"] ) ) {      ?>
        
        <form method="POST" action="mcd_mcm.php">
            <p>Ingrese los numeros a y b </p>
            <p>
                <input type="text" name="a" placeholder="a" size="6" />
                &nbsp;
                <input type="text" name="b" placeholder="b" size="6" />
            </p>
            <input type="submit" name="submit" value="Calcular" />
        </form>
        <?php } else { ?>
        <form method="POST" action="mcd_mcm.php">
            <p>Ingrese los numeros a y b </p>
            <p>
                <input type="text" name="a" placeholder="a" size="6" />
                &nbsp;
                <input type="text" name="b" placeholder="b" size="6" />
            </p>
            <input type="submit" name="submit" value="Calcular" />
        </form>            
            
        <?php 
            $num1 = (int) $_POST["a"];
            $num2 = (int) $_POST["b"];
            
            // obtiene el MCD de dos números
            
            function mcd($a, $b){
                if ($b == 0) {
                    return $a;
                }
                else {
                    return mcd($b, $a % $b);
                }
            }
            
            // obtiene el mcm de dos números utilizando el MCD
            function mcm($a, $b){
                return ($a * $b) / mcd($a, $b);
            }
            
            // calcula y presenta el MCD y el mcm
            echo "Usted escribió los números: $num1, $num2";
            echo "<br />";
            echo "El MCD de ($num1, $num2) es " . mcd($num1, $num2);
            echo "<br />";
            echo "El mcm de ($num1, $num2) es " . mcm($num1, $num2);

            }
        ?>

    </body>
</html>
