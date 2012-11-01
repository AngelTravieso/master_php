<?php

	/*
		Escribir un programa que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
	*/

	$numeros = [];

	echo '<ul>';
	for($i = 0; $i < 120; $i++) {
		array_push($numeros, $i);
		echo "<li>$numeros[$i]</li>";
	}

	echo '</ul>';


?>