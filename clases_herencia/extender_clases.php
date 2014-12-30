<!DOCTYPE html>
<!--
 Autor: Cristian Dario Bastos
 twitter: @cdbastos
 2014
-->
<?php
// definición de la clase principal
class Mamiferos {
    public $edad;
    function __construct(){
        echo 'Crear un nuevo ' . get_class($this) . '...';
    }
    function creaEdad($edad){
        $this->edad = $edad;
    }
    function traeEdad(){
        return $this->edad;
    }
    function crece(){
        $this->edad += 4;
    }
}
   
    // definición de la clase secundaria
    class Humano extends Mamiferos {
    public $nombre;
    function __construct(){
        parent::__construct();
    }
    function creaNombre($nombre){
        $this->nombre = $nombre;
    }
    function traeNombre(){
        return $this->nombre;
    }
    function crece(){
        $this->edad += 1;
        echo 'Creciendo...';
    }
}
?>
    
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Herencia </title>
    </head>
    <body>
        <?php
            $nene = new Humano;
            $nene->creaEdad(1);
            $nene->creaNombre('Tonka');
            echo $nene->traeNombre() . ' tiene ahora ' . $nene->traeEdad() . ' años 
            de edad...';
            $nene->crece();
            $nene->crece();
            echo $nene->traeNombre() . ' ahora tiene ' . $nene->traeEdad() . ' años 
            de edad...';
            
        ?>
    </body>
</html>
