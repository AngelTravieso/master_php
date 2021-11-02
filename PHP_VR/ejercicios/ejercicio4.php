<?php

/**
 * Recoger 2 numeros por la URL (Parametro GET) y haer todas las operaciones basicas de una calculadora
 * (Suma, Resta, Multiplicacion y Division)
 */


    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
            
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        echo "<h1>Suma: " . ( $numero1 + $numero2 ) . '</h1><br>';
        echo "<h1>Resta: " . ( $numero1 - $numero2 ) . '</h1><br>';
        echo "<h1>Multiplicación: " . ( $numero1 * $numero2 ) . '</h1><br>';
        echo "<h1>División: " . ( $numero1 / $numero2 ) . '</h1><br>';    

    } else {
        echo "<h1>Ingresa 2 números válidos</h1>";
    }


?>