<?php

    /**
     * Condicionales
     * 
     * if: 
     *      if (condicion) {
     *          instrucciones
     *      } else {
     *          otras instrucciones
     *      }
     *
     * 
     *  Operadores de Comparacion
     *  == igual / comparacion
     *  === identico (evalua el valor y tipo de dato)
     *  != distinto / diferente
     *  <> distinto / diferente
     *  !== no identico (estricto)
     *  < menor que
     *  > mayor que
     *  <= menor o igual que
     *  >= mayor o igual que
     * 
     * 
     *  Operadores Logicos
     *  && AND
     *  || OR
     *  ! NOT
     *  and, or
     *  
     */

    
    // Ejemplo 1
     $color = 'rojo';

     if ($color == 'rojo') {
         echo 'El color es rojo';
     } else {
         echo 'El color no es rojo';
     }

     echo '<br>';


     // Ejemplo 2
     $year = 2019;

     if ($year != 2019) {
         echo 'Es un año diferente a 2019';
     } else {
         echo 'Estamos en el 2019';
     }

     echo '<br>';


     // Ejemplo 3
     $nombre = 'Angel Travieso';
     $ciudad = 'Madrid';
     $continente = 'Europa';
     $edad = 18;
     $mayor_edad = 18;

     if ($edad >= $mayor_edad) {
        echo "<h1>$nombre es mayor de edad</h1>";

        if ($continente == 'Europa') {
            echo "<h2> Y es de $ciudad</h2>";
        } else {
            echo 'No es Europeo';
        }

     } else {
         echo "<h2>$nombre no es mayor de edad</h2>";
     }

     echo '<br>';
     echo '<hr>';


     // Ejemplo 4
     $dia = 1;

     /*
     if ($dia == 1) {
        echo 'Es Lunes';
     } else {
         if ($dia == 2) {
            echo 'Es Martes';
         } else {
             if ($dia == 3) {
                echo 'Es Miercoles';
             } else {
                 if ($dia == 4) {
                     echo 'Es Jueves';
                 } else {
                     echo 'Es Viernes';
                 }
             }
         }
     } */

     if ($dia == 1) {
         echo 'Lunes';
     } elseif ($dia == 2) {
         echo 'Martes';
     } elseif ($dia == 3) {
         echo 'Miercoles';
     } elseif ($dia == 4) {
         echo 'Jueves';
     } elseif ($dia == 5) {
        echo 'Viernes';
     } else {
         echo 'Es fin de semana';
     }


     echo '<hr>';

     // Switch
     $dia = 4;

     switch($dia) {
         case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        default:
            echo 'Fin de Semana';
     }




     echo '<br>';
     echo '<hr>';


     // Ejemplo 5
     $edad1 = 18;
     $edad2 = 64;
     $edad_oficial = 20;

     if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
        echo 'Esta en edad de trabajar';
     } else {
         echo 'No puede trabajar';
     }

     echo '<hr>';

    $pais = 'Mexico';

     if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
        echo 'En este pais se habla español';
     } else {
         echo 'no se habla español';
     }

     // GOTO

     goto ejecuta_aqui;
     echo '<h3>Instruccion 1</h3>';
     echo '<h3>Instruccion 2</h3>';
     echo '<h3>Instruccion 3</h3>';
     echo '<h3>Instruccion 4</h3>';
     
     ejecuta_aqui: echo '<h1>Me he saltado 4 echos</h1>';
     
?>