<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Matrices con formularios</title>
    </head>
    <body>
        <h1>Formulario matriz pizza</h1>
        
        <?php   if ( ! isset ( $_REQUEST["submit"] ) ) {  ?>
        
        <form method="post" action="formulario_pizza.php">
            <h2>Seleccione su pizza favorita: </h2>
            <input type="checkbox" name="favorita[]" value="tomate">Tomate</input>
            <input type="checkbox" name="favorita[]" value="cebolla">Cebolla</input>
            <input type="checkbox" name="favorita[]" value="jalapeños">Jalapeños</input>
            <input type="checkbox" name="favorita[]" value="aceitunas">Aceitunas</input>
            <input type="checkbox" name="favorita[]" value="suiza">Suiza</input>
            <input type="checkbox" name="favorita[]" value="piña">Piña</input>
            <input type="checkbox" name="favorita[]" value="tocino">Tocino</input>
            <input type="checkbox" name="favorita[]" value="pollo">Pollo</input>
            <input type="checkbox" name="favorita[]" value="jamón">Jamón</input>
            <input type="checkbox" name="favorita[]" value="anchoas">Anchoas</input>
            <input type="checkbox" name="favorita[]" value="extraqueso">Extra queso</input>
            <p>
            <input type="submit" name="submit" value="Enviar" />
        </form>
        
        <?php 
            } else {
                $pizza = $_REQUEST["favorita"] ;
                echo "<ol>";
                foreach ( $pizza as $favorita ) {
                    echo "<li>" . $favorita . "</li>\n";
                }
                echo "</ol>";
        ?>
        
            <form method="post" action="formulario_pizza.php">
                <h2>Seleccione su pizza favorita: </h2>
                <input type="checkbox" name="favorita[]" value="tomate">Tomate</input>
                <input type="checkbox" name="favorita[]" value="cebolla">Cebolla</input>
                <input type="checkbox" name="favorita[]" value="jalapeños">Jalapeños</input>
                <input type="checkbox" name="favorita[]" value="aceitunas">Aceitunas</input>
                <input type="checkbox" name="favorita[]" value="suiza">Suiza</input>
                <input type="checkbox" name="favorita[]" value="piña">Piña</input>
                <input type="checkbox" name="favorita[]" value="tocino">Tocino</input>
                <input type="checkbox" name="favorita[]" value="pollo">Pollo</input>
                <input type="checkbox" name="favorita[]" value="jamón">Jamón</input>
                <input type="checkbox" name="favorita[]" value="anchoas">Anchoas</input>
                <input type="checkbox" name="favorita[]" value="extraqueso">Extra queso</input>
                <p>
                <input type="submit" name="submit" value="Enviar" />
            </form>
            <?php } ?>
    </body>
</html>
