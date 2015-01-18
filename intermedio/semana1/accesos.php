<?php
    class Perro {

        public $color;
        public $nombre;
        public $raza;


        public function ladrar() {
            echo "Guau Guau!!";
        }

        public function descripcion() {
            return $this->nombre . " es de color " . $this->color;
        }
    }
    
    class Doberman extends Perro {
        var $raza = "Doberman";
        var $color = "Negro";
    }
    
    

    $perro1 = new Doberman();
    $perro2 = new Doberman();
    
    $perro1->nombre = "Boby";
    
    $perro2->nombre = "Brownie";
    
    
    echo $perro1->descripcion();
    echo $perro2->descripcion();


    echo "<br>";
