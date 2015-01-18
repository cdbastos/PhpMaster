<?php
    class Perro {

        var $color;
        var $nombre;
        var $raza;


        function ladrar() {
            echo "Guau Guau!!";
        }

        function descripcion() {
            return $this->nombre . " es de color " . $this->color;
        }
    }

    $perro1 = new Perro;
    $perro2 = new Perro;
    
    echo $perro1->raza;

    echo "<br>";

    $perro1->nombre = "Bobby";
    $perro2->nombre = "Brown";
    $perro1->color = "Plata";
    $perro2->color = "Marron";

    echo $perro1->descripcion();
    echo "<br>";
    echo $perro2->descripcion();