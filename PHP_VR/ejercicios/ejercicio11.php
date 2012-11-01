<?php

	/*
		Crear un script que tenga 4 variables, una de tipo array, otra string, otra int y otra booleana y que imprima un mensaje segun el tipo de variable que sea

	*/

	$array = ['Jose', 12];
	$string = 'Angel Travieso';
	$int = 22;
	$bool = true;

	if(is_array($array)) {
		echo '<h1>El array es un array</h1>';
	}

	if(is_string($string)) {
		echo "<h1>$string</h1>";
	}

	if(is_int($int)) {
		echo "<h1>$int</h1>";
	}

	if(is_bool($bool)) {
		echo "<h1>$bool</h1>";
	}






?>