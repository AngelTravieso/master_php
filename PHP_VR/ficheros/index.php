<?php

	/*
		Permisos de Lectura

		r => Lectura
		x => Ejecucion
		w => Escritura
		a+ => Lectura y escritura
	*/
		
	// Abrir archivo
	 $archivo = fopen('file.txt', 'a+');


	//  Leer contenido
	//  Cuando el contenido tiene muchas lineas se debe usar un bucle

	// feof comprueba si el puntero a un archivo esta al final del archivo
	 while(!feof($archivo)) {
		$contenido = fgets($archivo);
	 	echo "$contenido <br>";
	 }


	// Escribir en un archivo (debe tener permisos de escritura)
	fwrite($archivo, '****Soy un texto metido desde PHP***');

	
	// Cerrar archivo
	fclose($archivo);


	// Copiar fichero
	copy('file.txt', 'file_copy.txt') or die('Error al copiar');


	// Renombrar fichero
	rename('file_copy.txt', 'rename.txt');


	// Eliminar fichero
	unlink('rename.txt') or die('Error al borrar');


	// Comprobar si el fichero existe
	if(file_exists('file_copy.txt')) {
		echo '¡EXISTE!';
	} else {
		echo '¡NO EXISTE!';
	}




