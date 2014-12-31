<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Matrices con formularios</title>
    </head>
    <body>
        <?php   if ( ! isset ($_POST["submit"]) ) {     ?>
        <form method="post" action="matrices_formularios.php">
            Selecciona el nombre de tu artista favorito: <br />
            <select name="artistas[]" multiple="true">
                <option value="Britney Spears">Britney Spears</option>
                <option value="Aerosmith">Aerosmith</option>
                <option value="Black-Eyed Peas">Black-Eyed Peas</option>
                <option value="Diana Ross">Diana Ross</option>
                <option value="Foo Fighters">Foo Fighters</option>
            </select>
            <p>
            <input type="submit" name="submit" value="Enviar" />
        </form>
        
        <?php } else { 
            echo "<ol>";
            $array = $_REQUEST["artistas"] ;
            foreach( $array as $i => $valor) {
                echo  "<li>" . $valor . "</li>" ;
            }
            echo "</ol>";
        }
        ?>
    </body>
</html>
