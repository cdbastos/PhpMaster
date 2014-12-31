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
        
        //crea el elemento value
        public function creaValue($value) {
            $this->value = $value;
        }
        
        //trae el elemento value
        public function traeValue() {
            return $this->value;
        }
        
        //crea el elemento label
        public function creaLabel($label) {
            $this->label = $label;
        }
        
        //trae el elemento label
        public function traeLabel() {
            return $this->label;
        }
    }
    
    // se crea la clase secundaria option
    class Option extends Elemento {
        
        //constructor
        public function __construct($value="", $label="") {
            parent::__construct();
            $this->creaValue($value);
            $this->creaLabel($label);
        }
        
        //metodo: datos de salida HTML para los elementos <option>
        public function render() {
            echo "<option value='" . $this->traeValue() . "'>" . $this->traeLabel() . "</option>\n";
        }
    }
    
    // se crea la clase secundaria select
    class Select extends Elemento {
        
        protected $options;
        
        // constructor
        public function __construct() {
            parent::__construct();
            $this->options = array();
        }
        
        // metodo añade una opcion a la lista
        public function creaOption($option) {
            $this->options[] = $option;
        }
        
        // metodo regresa todas las opciones para la lista como una matriz
        private function traeOptions() {
            return (array)$this->options;
        }
        
        // metodo envia el codigo html para la etiqueta <select>
        public function render() {
            echo $this->traeLabel() . ":\n";
            echo "<select name='" . $this->traeName() . "'>\n";
            foreach ($this->traeOptions() as $opt) {
                echo $opt->render();
            }
            echo "</select>";
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
        
        <article>
            <h1>Viendo las listas generadas</h1>
            <section>
                <p> <?php
                    // genera una lista de selección
                    $frutas = new Select();
                    $frutas->creaLabel("Frutas");
                    $frutas->creaName("frut_sel");
                    $frutas->creaOption(new Option ("Naranjas", "Naranjas"));
                    $frutas->creaOption(new Option ("Fresas", "Fresas"));
                    $frutas->creaOption(new Option ("Piñas","Piñas"));
                    $frutas->creaOption(new Option ("Plátanos", "Platanos"));
                    $frutas->render();
                    ?>
                </p>
                <p> <?php
                    // genera la lista de seleccion #2
                    $metales = new Select();
                    $metales->creaLabel("Metales");
                    $metales->creaName("metal_sel");
                    $metales->creaOption(new Option("Acero", "acero"));
                    $metales->creaOption(new Option("Plata", "Plata"));
                    $metales->creaOption(new Option("Oro", "Oro"));
                    $metales->creaOption(new Option("Platino", "Platino"));
                    $metales->render();
                    ?>
                </p>
                <p> <?php
                    // genera la lista de selccion #3
                    $animales = new Select();
                    $animales->creaLabel("Animales");
                    $animales->creaName("animal_sel");
                    $animales->creaOption(new Option("León","León"));
                    $animales->creaOption(new Option("Hiena","Hiena"));
                    $animales->creaOption(new Option("Zorro","Zorro"));
                    $animales->render();
                    ?>
                 </p>
            </section>
            <section>
                <!-- Utilizando la clase Select definida en este capítulo, crea una clase SeleccionarFecha que 
                contenga tres listas de selección, una para el día, otra para el mes y otra para el año. 
                Muestra el uso de esta clase en un formulario Web. -->
                <h1>Generar Fecha: </h1>
                <?php
                    //define clase secundaria SeleccionarFecha
                    class SeleccionarFecha extends Select{
                        
                        //constructor
                        public function __construct() {
                            parent::__construct();
                        }
                        
                        public function creaYear() {
                            //crea una matriz con los años
                                $arr_anios = array (
                                    "2010","2011","2012","2013","2014","2015","2016"
                                );
                                // genera la lista de anios
                                $año = new Select();
                                $año->creaLabel("Año");
                                $año->creaName("anio");
                                foreach ( $arr_anios as $opt ) {
                                    $año -> creaOption ( new Option($opt, $opt) );
                                }
                                $año->render();
                        }
                        
                        public function creaMes() {
                            // crea un array con los meses
                            $arr_mes = array (
                                "01" => "Enero",
                                "02" => "Febrero",
                                "03" => "Marzo",
                                "04" => "Abril",
                                "05" => "Mayo",
                                "06" => "Junio",
                                "07" => "Julio",
                                "08" => "Agosto",
                                "09" => "Septiembre",
                                "10" => "Octubre",
                                "11" => "Noviembre",
                                "12" => "Diciembre",
                            );
                            // genera la lista de meses
                            $mes = new Select();
                            $mes->creaLabel("Mes");
                            $mes->creaName("mes");
                            foreach ( $arr_mes as $opt => $valor) {
                                $mes->creaOption(new Option($opt, $valor));
                            }
                            $mes->render();
                        }
                        
                        public function creaDia() {
                            //crea un array con los dias
                            $arr_dia = range(1, 30);
                            
                            //genera la lisda de dias
                            $dia = new Select();
                            $dia->creaLabel("Dia");
                            $dia->creaName("dia");
                            foreach ( $arr_dia as $opt ) {
                                $dia->creaOption(new Option($opt, $opt));
                            }
                            $dia->render();
                        }
                    }
                ?>
                <p>
                <?php 
                    $fecha = new SeleccionarFecha();
                    $fecha->creaYear();
                    echo "&nbsp;&nbsp;";
                    $fecha->creaMes();
                    echo "&nbsp;&nbsp;";
                    $fecha->creaDia();
                    echo "&nbsp;&nbsp;";
                ?>
                </p>
            </section>
        </article>

    </body>
</html>
