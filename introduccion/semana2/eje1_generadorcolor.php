<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Generador de color</title>
    </head>
    <body>
        <?php
            if ( !isset ($_POST["boton"]) ) { ?>
            <form action="eje1_generadorcolor.php" method="post">
            <p>
                R: <input type="text" name="r" />
            </p>
            <p>
                G: <input type="text" name="g" />
            </p>
            <p>
                B: <input type="text" name="b" />
            </p>
            <p>
                <input type="submit" name="boton" value="Mostrar color" />
            </p>
            </form>
        
        <?php } else {
                $str = $_POST["r"] . "," . $_POST["g"] . "," . $_POST["b"];  
        ?>
        
        <div style="width: 100px; height: 100px; background-color: rgb(<?php echo $str ; ?>)" >
        </div>
        
        <?php echo $str ; ?>
        
            <form action="eje1_generadorcolor.php" method="post">
                <p>
                    R: <input type="text" name="r" />
                </p>
                <p>
                    G: <input type="text" name="g" />
                </p>
                <p>
                    B: <input type="text" name="b" />
                </p>
                <p>
                    <input type="submit" name="boton" value="Mostrar color" />
                </p>
            </form>
        
            <?php } ?>
        
    </body>
</html>
