<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Calculadora de edad: </title>
    </head>
    <body>
        <h1>Calculadora de edad</h1>
        <?php if ( ! isset ( $_REQUEST["submit"]) ) {   ?>
        <form method="post" action="calculadora_edad.php">
            <p> 
                Introduce tu fecha de nacimiento en formato mes dia año <br/>
                <input type="tex" name="fecha" placeholder="January 15 1980" maxlength="17" />
            </p>
            <p>
                <input type="submit" name="submit" value="Enviar" />
            </p>
        </form>
        <?php
        } else {
            
            
            // calcula el sello cronológico correspondiente al valor de la fecha
            $fechaTs = strtotime($_POST['fecha']);
            
            // calcula el sello cronológico correspondiente al día de hoy, 'today'
            $now = strtotime('today');
            

            // verifica que la fecha sea anterior a hoy, 'today'
            if($fechaTs >= $now) {
                die('ERROR: Por favor escriba una fecha anterior al día de hoy');
            }
            
            // calcula la diferencia entre la fecha de nacimiento y el día de hoy en días
            // convierte en años
            // convierte los días restantes en meses
            // presenta los datos de salida
            $edadDias = floor(($now - $fechaTs) / 86400);
            $edadAnos = floor($edadDias / 365);
            $edadMeses = floor(($edadDias - ($edadAnos * 365)) / 30);
            echo "Su edad aproximada es $edadAnos años y $edadMeses meses.";
            } 
            ?>
    </body>
</html>
