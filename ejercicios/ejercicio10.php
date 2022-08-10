<?php

	/*
		Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita
	*/


	$dato = '';

	if(!empty($dato)) {
		echo 'La variable tiene este contenido dentro';
	} else {
		$dato = 'Texto relleno';
		$dato = strtoupper($dato);
		echo "<h1>$dato</h1>";
	}


?>