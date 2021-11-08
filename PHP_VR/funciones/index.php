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

   //   if (isset($_GET['numero'])) {
   //      tabla($_GET['numero']);
   //   } else {
   //      echo "No hay número para sacar la tabla";
   //   }


   // Ejemplo 3
   function calculadora($numero1, $numero2, $negrita = false) {
      // Conjunto de instrucciones a ejecutar
      $suma = $numero1 + $numero2;
      $resta = $numero1 - $numero2;
      $multi = $numero1 * $numero2;
      $division = $numero1 / $numero2;

      if($negrita) {
         echo "<h1>";
      }

      echo "Suma: $suma <br>";
      echo "Resta: $resta <br>";
      echo "Multiplicación: $multi <br>";
      echo "División: $division <br>";

      if($negrita) {
         echo "</h1>";
      }
      
      echo "<hr/>";
   }

   calculadora(10, 30, true);
   calculadora(5, 56, true);
   calculadora(6, 12, false);


?>