<?php

    /**
     * Funciones: Es un conjunto de instrucciones agrupadas bajo un nombre concreto y que puede reutilizarse
     * solamente invocando a la funcion tantas veces como se requira
     */


     // Ejemplo 1
     function muestraNombres() {
        echo "Angel Travieso <br>";
        echo "Gustavo Castro <br>";
        echo "Victor Perez <br>";
        echo "Luis Perez <br>";
        echo "<hr>";
     }

     // Invocar funcion
    //  muestraNombres();
    //  muestraNombres();
    //  muestraNombres();

     // Ejemplo 2
     function tabla($numero) {
        echo "<h3>Tabla de multiplicar del numero: $numero</h3>";

        for($i = 1; $i <= 10; $i++) {
            $operacion = $numero * $i;
            echo "$numero x $i = $operacion <br>";
        }
     }

     if (isset($_GET['numero'])) {
        tabla($_GET['numero']);
     } else {
        echo "No hay número para sacar la tabla";
     }


?>