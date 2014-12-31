<?php

/* 
 * Autor: Cristian Dario Bastos
 * twitter: @cdbastos
 * 2014
 */

function mayor($array) {
    if ( (max($array) > 20) && (min($array) > 0)) {
        // comprueba que los numeros sean mayores a 0 y menores o iguales a 20
        return false;
    } else {
        return true;
    }
}

function aleatorio() {
    // Crea un nuevo array con numeros del 0 al 5
    $array = range(0, 5);
    foreach ($array as $i) {
        $array[$i] = rand(1, 20); // asigna un valor aleatorio
    }
    return $array;
}

function buscar($array, $array_2) {
//    $comunes = array_intersect($array, $array_2);
    $comunes = array();
    foreach ($array as $val) {
        if ( in_array($val,$array_2)) { // busca valores del primer array en el segundo
            array_push($comunes, $val); // si hay valores comunes los agrega al nuevo array comunes
        }
    }
    return $comunes;
}