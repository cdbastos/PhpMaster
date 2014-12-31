<!DOCTYPE html>
<!-- Cristian Dario Bastos-->

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/normalize.css" />
        <title>Mayuscualas, minusculas y funciones con string</title>
    </head>
    <body>
        <?php
            // hola esto es un comentario
            # Esto es otro comentario
            /* de aqui para abajo es otro comentario
             *
             */
            echo "Bienvenido \n a \n PHP <br/>" ;
            echo 'Bienvenido \n a \n PHP <br/>';
            $saludo = "hola mi nombre es Cristian Dario Bastos";
            echo $saludo."<br>";
            echo "Todo en minusculas: ".strtolower($saludo)."<br>";
            echo "Todo en mayusculas: ".strtoupper($saludo)."<br>";
            echo ucfirst($saludo)."<br>";
            echo ucwords($saludo)."<br>";
            echo str_repeat($saludo,2)."<br>";
            echo "Contero de caracteres ".strlen($saludo)."<br>";
            echo "Buscar Cadenas: ".strstr($saludo,"Cristian")."<br>";
            echo "Reemplazar Cadenas: ".str_replace("Bastos","Lamata Feliz",$saludo)."<br>";
            echo "Buscar caracter ".strchr($saludo,"D")."<br>";
            
        ?>
    </body>
</html>