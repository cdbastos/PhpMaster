<!DOCTYPE html>
<!-- Cristian Dario Bastos
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Registro de usuarios</title>
    </head>
    <body>
        <h1>Registro de usuarios</h1>
        <form method="post" action="">
            <p>
                <span>Nombre: </span> <br>
                <input type="text" name="nombre" />
            </p>
            <p>
                <span>Direccion: </span> <br>
                <textarea name="nombre" rows="5" > </textarea>
            </p>
            <p>
                <span>Edad: </span> <br>
                <input type="text" size="3" />
            </p>
            <p>
            <span>Profesion</span> <br/>
            <input type="text" name="profesion"/>
            </p>
            <p>
                <span>Residencia</span><br/>
                <input type="radio" name="residencia" value="1" /> Propia
                <input type="radio" name="residencia" value="2" /> Arrendada
            </p>
            <p>
                <input type="submit" name="submit" value="Registrar" />
            </p>
        </form>
        
    </body>
</html>
