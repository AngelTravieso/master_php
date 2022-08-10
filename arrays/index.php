<?php

	/*
		ARRAYS
		Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre
		Para acceder a esos valores podemos usar un indice numerico o alfanumerico
	*/


	$pelicula = 'Batman';
	// $peliculas = array('Batman', 'Spiderman', 'El señor de los Anillos');
	$peliculas = ['Batman', 'Spiderman', 'El señor de los Anillos'];
	$cantantes = ['Drake', '2pac', 'Ghostname', 'Boys'];

	// Array asociativo
	$nombres = ['nombre' => 'Angel', 'apellido' => 'Travieso', 'web' => 'angeltraviesoc@gmail.com'];

	echo $nombres['web'];



	// Recorrer con for
	echo '<h1>Listado de peliculas:</h1>';

	echo '<ul>';
	for($i = 0; $i < count($peliculas); $i++) {
		echo "<li>$peliculas[$i]</li>";
	}

	echo '</ul>';


	// Recorrer con forEach
	echo '<h1>Listado de cantantes:</h1>';

	echo '<ul>';
	foreach($cantantes as $cantante) {
		echo "<li>$cantante</li>";
	}

	echo '</ul>';


	// Arrays multidimensionales
	$contactos = [
		['nombre' => 'Angel', 'email' => 'correo@correo.com'],
		['nombre' => 'Luis', 'email' => 'correo2@correo2.com'],
		['nombre' => 'Pedro', 'email' => 'correo3@correo3.com'],
	];


	foreach($contactos as $key => $contacto) {
		var_dump($contacto);
	}





?>