<!DOCTYPE html>
<!-- Cristian Dario Bastos -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eje tipo de auto</title>
    </head>
    <body>
        <h2>Selecciona tu Automóvil</h2>
        <form action="eje1_carro.php" method="post">
            <p>Tipo: 
            <select name="tipo">
                <option value="Porsche 911">Porsche 911</option>
                <option value="Volkswagen Beetle">Volkswagen Beetle</option>
                <option value="For Taurus">Ford Taurus</option>
            </select>
            </p>
            <p>
                Color: 
                <input type="text" name="txtColor" placeholder="Color" />
            </p>
            <input type="submit" value="Enviar" />
            
        </form>
    </body>
</html>
