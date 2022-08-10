<?php

    // Debuggear
    $nombre = "Angel Travieso";
    var_dump($nombre);
    echo "<br>";


    // Fechas
    echo date('d-m-y');
    echo "<br>";


    // Fecha en formato units
    echo time();
    echo "<br>";


    // Matematicas
    echo "Raiz cuadrada de 10: " . sqrt(10);
    echo "<br>";


    // Numero aleatorio
    echo "Numero aleatorio entre 10 y 40: " . rand(10, 40);
    echo "<br>";


    // PI
    echo "Numero PI: " . pi();
    echo "<br>";


    // Redondeo
    echo "Redondear: " . round(7.891234, 2);
    echo "<br>";


    // Tipo de dato
    echo gettype($nombre);
    echo "<br>";

    if (is_string($nombre)) {
        echo "Esa variable es un string";
    }

    echo "<br>";
    
    if (!is_float($nombre)) {
        echo "La variable nombre no es un numero con decimales";
    }

    echo "<br>";

    // Verificar si la variable esta definida
    if (isset($nombre)) {
        echo "La variable existe";
    } else {
        echo "La variable no existe";
    }

    echo "<br>";

    // Trim (Limpiar espacios)
    $frase = "             mi contenido           ";
    var_dump(trim($frase));

    echo "<br>";

    // Eliminar variables o indices de arrays
    $year = 2021;
    unset($year);
    // var_dump($year);

    echo "<br>";

    // Comprobar variable vacia
    $texto = "";

    if (empty($texto)) {
        echo "La variable texto esta vacia";
    } else {
        echo "La variable texto TIENE CONTENIDO";
    }

    echo "<br>";

    // Longitud cadena de texto
    $cadena = "12345";
    echo strlen($cadena);
    
    echo "<br>";

    // Encontrar en un string la posicion de un caracter determinado
    $frase = "La vida es bella";
    echo strpos($frase, "vida");

    echo "<br>";

    // Reemplazar palabras de un string
    $frase = str_replace("vida", "moto", $frase);
    echo $frase;

    echo "<br>";

    // MAYUSCULAS y minusculas
    echo strtolower($frase);
    echo "<br>";
    echo strtoupper($frase); 

?>