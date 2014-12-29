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
        <title>Clases y objetos</title>
    </head>
    <body>
        <?php
            // crea la clase
            class Automovil {
                // propiedades
                public $color;
                public $modelo;
                public $velocidad = 55;
                
                // metodos
                public function acelerador() {
                    $this->velocidad += 10;
                    echo "Aumenta la velocidad a " . $this->velocidad . "..." ;
                }
                
                public function freno() {
                    $this->velocidad -= 10;
                    echo "Disminuye la velocidad a " . $this->velocidad . "..." ;
                }
                
                public function direccion() {
                    $this->freno() ;
                    echo "Da una vuelta...";
                    $this->acelerador() ;
                }
            }
        ?>
        
        <?php 
            // crea el objeto
            $carro = new Automovil;
            // invoca los metodos del objeto
            $carro->acelerador();
            $carro->direccion();
        ?>
        
        <h1> Rayos X a la clase </h1>
        <?php
            Reflection::export(new ReflectionClass('Automovil'));
        ?>
        <h1> Rayos X al objeto </h1>
        <?php
            Reflection::export(new ReflectionObject($carro));
        ?>
        <h3>Codigo ascii de h</h3>
        <?php echo ord('h') ?>
        <h3>Caracter ascii de 104</h3>
        <?php echo chr('104') ?>
    </body>
</html>
