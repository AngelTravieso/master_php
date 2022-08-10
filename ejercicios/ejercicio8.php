<?php

	/*
		Hacer un programa que tenga un array con 8 numeros enteros y que haga lo siguiente:

		1. Recorrerlo y mostrarlo
		2. Ordenarlo y mostrarlo
		3. Mostrar su longitud
		4. Buscar algo dentro del array (URL)
		
	*/

	$numeros = [5,8,3,1,2,7,6,4];

	echo '<h1>Recorrer Array</h1>';
	echo '<ul>';

	// 1. Recorrerlo y mostrarlo
	for($i = 0; $i < count($numeros); $i++) {
		echo "<li>$numeros[$i]</li>";
	}

	echo '</ul>';


	// 2. Ordenarlo y mostrarlo
	echo '<h1>Ordenar Array</h1>';
	sort($numeros);
	echo '<ul>';

	for($i = 0; $i < count($numeros); $i++) {
		echo "<li>$numeros[$i]</li>";
	}

	echo '</ul>';


	// 3. Mostrar su longitud
	echo "<h1>Longitud del Array: " . sizeof($numeros) . "</h1>";


	// 4. Buscar algo dentro del array
	if(isset($_GET['numero'])) {

		$numero = $_GET['numero'];
		$busqueda = array_search($numero, $numeros);


		// $indice = array_rand($numeros);
		if(!empty($busqueda)) {
			echo "<h1>El numero $numero se encuentra en el indice $busqueda</h1>";
		} else {
			echo "<h1>El $numero no se encuentra en el array</h1>";
		}

		
	} else {
		echo "<h1>Indica un numero para buscar</h1>";
	}


?>