<!DOCTYPE html>
<!--
 Autor: Cristian Dario Bastos
 twitter: @cdbastos
 2014
-->

<!--Aquí crearás objetos para imitar las etiquetas <select>y <option>, 
utilizadas en un formulario Web, escribiendo métodos que te permitan definir 
la lista de selección para tu programa. Hay tres objetos primarios que encontrarás en el siguiente ejemplo:
un objeto base Element dos objetos derivados llamados Select y Option. -->
<?php
    // se crea la clase Elemento
    class Elemento {
        private $name;
        private $value;
        private $label;
        
        // constructor
        public function __construct() {
        }
        
        //crea el elemento name
        public function creaName($name) {
            $this->name = $name;
        }
        
        //trae el elemento name
        public function traeName() {
            return $this->name;
        }
    }
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/normalize.css" />
        <title>Gerarar listas de seleccion: </title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
