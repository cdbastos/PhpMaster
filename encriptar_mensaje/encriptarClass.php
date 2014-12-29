<?php

/*
 * Autor: Cristian Dario Bastos
 * twitter: @cdbastos
 * 2014
 */

/**
 * Description of encriptarClass
 *
 * @author Dao
 */
class encriptarClass {
    //guarda la clave numerica escrita por el usuario
    // que se utilizará para el cifrado
    public $clave;
    
    //Métodos
    //configura la propiedad Clave
    public function creaClave($clave) {
        $this->clave = $clave;
    }
    
    //regresa el valor de la propiedad clave
    public function traeClave() {
        return $this->clave;
    }
    
    //cifra 
    // acepta una cadena de texto plano y la cifra utilizando la clave.
    // calcula el valor numerico de cada caracter con la funcion ord()
    public function cifra($texto) {
        for ( $k = 0 ; $k < strlen($texto) ; $k++ ) {
            $cifra[] = ord($texto[$k]) + $this->traeClave() + ( $k * $this->traeClave() );
        }
        // convierte la matris cifra en una cadena de caracteres con el separador /
        return implode('/', $cifra);
    }
    
    //descifra 
    // acepta una cadena cifrada y la restaura a su estado original
    // restaura el caracter con la funcion chr()
    public function descifra($cifra){
        //convierte la cadena de texto $cifra a una matris con explode y separador /
        $datos = explode('/',$cifra);
        $texto = "";
        for ( $k = 0 ; $k < count($datos) ; $k++ ) {
            $texto .= chr($datos[$k] - $this->traeClave() - ( $k * $this->traeClave()));
        }
        return $texto;
    }
}
