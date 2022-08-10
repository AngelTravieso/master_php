<?php

	// Bucle While
	// Estructura de control que itera o repite la ejecucion de una serie de instrucciones
	
	// Ejemplo 1 (numeros hasta el 100)
	$numero = 0;	
	while ($numero <= 100) {
		echo $numero;

		if ($numero != 100) {
			echo ', ';
		}

		$numero++;
	}

	echo '<hr>';
	

	// Ejemplo 2 (tabla de multiplicar)
	if (isset($_GET['numero'])) {
		$numero = (int)$_GET['numero']; // casting
	} else {
		$numero = 1;
	}


	echo "<h1>Tabla de multiplicar del numero $numero</h1>";

	$contador = 1;
	while($contador <= 10) {
		echo "$numero x $contador = " . ($numero * $contador) . "<br>";
		$contador++;
	}


	echo '<hr>';

	//  Do While

	$edad = 18;
	$contador = 1;

	do {
		echo "Tienes acceso al local privado $contador <br>";
		$contador++;
	} while($edad >= 18 && $contador <= 10);


?>