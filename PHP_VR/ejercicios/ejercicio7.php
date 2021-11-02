<?php

/**
 * Hacer un programa que muestre todos los numeros IMPARES entre 2 numeros que nos lleguen por la URL ($_GET)
 */


 if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
     
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero2 < $numero1) {
        echo "<h1>El número 1 debe ser mayor que el número 2</h1>";
    } else {
        for($numero1; $numero1 <= $numero2; $numero1++) {
            if($numero1 % 2 == 1) {
                echo "<h1>$numero1: Es Impar</h1>";
            } else {
                echo "<h1>$numero1: Es Par</h1>";
            }
        }
    }
 } else {
     echo "<h1>Ingresa 2 números válidos</h1>";
 }


?>