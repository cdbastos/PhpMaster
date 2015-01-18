<?php
    class Perro {
       
    }
    // oobtiene todas las clases creadas en php lo devuelve en un array
    $clases = get_declared_classes();
    
    foreach ( $clases as $clase ) {
        echo $clase . "<br>";
    }
    
    // verifica si una clase ha sido definida
    if (class_exists("Perro")) {
        echo "La clase ha sido creada";
    }


   
?>