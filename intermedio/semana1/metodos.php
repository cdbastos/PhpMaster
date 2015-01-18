<?php
    class Perro {
       
        function ladrar() {
            echo "Guau Guau!!";
        }
    }
    
    if ( method_exists("Perro","Ladrar")) {
        echo "El método existe.";
    } else {
        echo "El método no existe.";
    }
    
    echo "<br>";
    
    $metodos = get_class_methods("perro");
    
    foreach ( $metodos as $metodo ) {
        echo $metodo . "<br>";
    }
    
