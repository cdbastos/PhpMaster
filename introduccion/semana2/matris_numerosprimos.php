<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Matris numeros primos </title>
    </head>
    <body>
        <h1>Numeros primos: </h1>
        <!-- cuando no se ha enviado el formulario -->
        <?php if ( ! isset ( $_REQUEST["submit"] ) ) {    ?>
        <form action="matris_numerosprimos.php" method="post" >
            <p>
                Escriba una lista de números separados por coma (,): <br/>
                <input type="text" name="num" />
            </p>
            <p>
                <input type="submit" name="submit" value="Enviar" />
            </p>
        </form>
        
        <?php 
        } else {
            $num = $_REQUEST["num"]; // guarda los numeros ingresados
            $numeros = explode(',', $num); // convierte la cadena string en un vector
            
            $primos = array();
            
            
            foreach ($numeros as $i) { // recorre todo el vector
                $n = trim( abs($i) ); // elimino espacios y convierto el valor absoluto
                $conta = 0; // inicializa variable contador
                for ($k = 1 ; $k <= $n ; $k ++ ) { 
                    if ( fmod($n, $k) == 0 ) {
                        $conta ++ ;
                    }
                }
                
                if ( $conta == 2) {
                    array_push($primos, $n); // si es primo guardo el valor en $primos
                }
                
            }
            
            if ( count ($primos) > 0 ) { // si existen numeros primos 
                $primos = array_unique($primos); // elimina valores duplicados 
                sort ($primos); // reordena la matriz 
                echo "Los siguientes numeros son primos: " . implode($primos, ', '); // convierte los valores en la matriz en una cadena string 
            } else {
                echo "No se encontraron numeros primos";
            }
            
            
        }
        ?>
    </body>
</html>
