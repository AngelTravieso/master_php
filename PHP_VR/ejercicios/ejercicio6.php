<?php

    /**
     * Mostrar en una tabla de HTML con las tablas de multiplicar del 1 al 10
     */

     for($i = 1; $i <= 10; $i++) {
         echo "<h1>Tabla del $i</h1>";

         for($c = 1; $c <= 10; $c++) {
             echo "$i x $c = " . $i * $c . "<br>";
         }
     }

?>