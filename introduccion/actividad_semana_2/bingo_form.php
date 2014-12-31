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
        <title>Bingo</title>
    </head>
    <body>
        <section>
            <article>
                <h1>Bingo</h1>
                <form action="bingo.php" method="POST">
                    <fieldset>
                        <legend>&nbsp;Ingrese 6 números del 1 al 20&nbsp;</legend>
                        <p>
                            <input type="text" name="n_1" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}" />
                        </p>
                        <p>
                            <input type="text" name="n_2" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}"/>
                        </p>
                        <p>
                            <input type="text" name="n_3" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}"/>
                        </p>
                        <p>
                            <input type="text" name="n_4" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}"/>
                        </p>
                        <p>
                            <input type="text" name="n_5" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}"/>
                        </p>
                        <p>
                            <input type="text" name="n_6" maxlength="2" size="5" required="required" pattern="[0-9]{1,2}"/>
                        </p>
                        <p>
                            <input type="submit" value="Calcular" id="boton" />
                        </p>
                    </fieldset>
                </form>
            </article>
        </section>

    </body>
</html>
