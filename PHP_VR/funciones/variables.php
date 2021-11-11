<?php

    /**
     * Variables locales: Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro. A menos que se haga un return
     */


    /**
     * Variables globales: 
     * Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones */ 

     // Variable global
     $frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres';

     echo $frase;

     function holaMundo() {

        global $frase;

        echo "<h1>$frase</h1>";

        $year = 2019;
        echo "<h1>$year</h1>";

        return $year;
     }

     echo holaMundo();

     echo "<br>";

     // Funciones variables (parecido al function expression)
     function buenosDias() {
        return "<h1>Hola! Buenos Dias :)</h1>";
     }

     function buenasTardes() {
        return "<h1>Hey!! Que tal ha ido la comida??</h1>";
     }

     function buenasNoches() {
        return "<h1>Te vas a dormir ya? Buenas noches!!</h1>";
     }

     $horario = "Tardes";
     $funcion =  "buenas" . $horario;
     echo $funcion();

?>