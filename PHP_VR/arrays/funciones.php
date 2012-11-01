<?php

	$cantantes = ['Drake', '2pac', 'Ghostname', 'Boys', 'Alex'];
	$numeros = [1,2,9,5,7,8,6,4];

	// Ordenar alfabeticamente
	asort($cantantes);

	// Ordenar alfabeticamente (descendente)
	arsort($cantantes);

	// Ordenar (tambien para numeros)
	sort($numeros);

	// Agregar elemento a un array
	$cantantes[] = 'Metallica';
	array_push($cantantes, 'Slayer');

	// Eliminar elemento de un array
	array_pop($cantantes);

	// Eliminar elemento de un indice concreto
	unset($cantantes[2]);

	// Aleatorio
	$indice = array_rand($cantantes);
	echo $cantantes[$indice];

	echo '<br>';

	// Reversar array
	var_dump(array_reverse($numeros));

	echo '<br>';

	// Buscar dentro de un array
	$resultado = array_search('Drake', $cantantes);

	var_dump($resultado);

	echo '<br>';

	// Contar numero de elementos
	echo count($cantantes);


	// var_dump($cantantes);


?>