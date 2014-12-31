<?php
    include "encriptarClass.php";
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
        <link rel="stylesheet" href="../actividad_semana_2/estilo.css" />
        <link rel="stylesheet" href="./estilo.css" />
        <title>Encriptador de mensajes</title>
    </head>
    <body>
        <section>
            <h1>Encriptador de texto</h1>
            <?php
            // si el formulario no ha sido enviado
            if ( ! isset ( $_POST["submit"] ) ) { ?>
            
            <form method="POST" action="encripta_form.php">
                <fieldset>
                    <legend>&nbsp;Escribir:&nbsp;</legend>
                    <p>
                        <input type="radio" name="tipo" value="t">
                        <label>Texto para cifrar</label>
                        <input type="radio" name="tipo" value="c">
                        <label>Texto cifrado</label>
                    </p>
                    <p>
                        <textarea name="texto" rows="6" wrap="soft" ></textarea>
                    </p>
                    <p>
                        <label>Escriba la clave numerica: </label>
                        <input type="text" name="clave" maxlength="6" pattern="[0-9]{1,6}" />
                    </p>
                    <p>
                        <input type="submit" id="boton" name="submit" value="Convertir" />
                    </p>
                </fieldset>
            </form>
            <?php
            // si el formulario ha sido enviado
            } else {
                $tipo = $_POST["tipo"];
                $texto = $_POST["texto"];
                $clave = $_POST["clave"];
            ?>
            
            <form method="POST" action="encripta_form.php">
                <fieldset>
                    <legend>&nbsp;Escribir:&nbsp;</legend>
                    <p>
                        <input type="radio" name="tipo" value="t">
                        <label>Texto para cifrar</label>
                        <input type="radio" name="tipo" value="c">
                        <label>Texto cifrado</label>
                    </p>
                    <p>
                        <textarea name="texto" rows="6" wrap="soft" ></textarea>
                    </p>
                    <p>
                        <label>Escriba la clave numerica: </label>
                        <input type="text" name="clave" maxlength="6" pattern="[0-9]{1,6}" value="<?php echo $clave ?>"/>
                    </p>
                    <p>
                        <input type="submit" id="boton" name="submit" value="Convertir" />
                    </p>
                </fieldset>
            </form>
            <h3>Resultado: </h3>
            <p id="result">
            
                <?php 
                 // realiza cifrado o descifrado
                $result = new encriptarClass();
                $result->creaClave($clave);
                
                // comprueba si va a cifrar o descifrar
                if ($tipo == "t") { 
                    echo $result->cifra($texto);
                } else {
                    echo $result->descifra($texto);
                }
                ?>
            </p>

        <?php    }        ?>
        
        </section>

    </body>
</html>