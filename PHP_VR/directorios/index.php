<?php
	

	// Comprobar si existe el directorio
	if(!is_dir('mi_carperta')) {

		// Crear directorio (nombre, permisos)
		mkdir('mi_carperta', 0777) or die('No se puede crear la carpeta');

	} else {
		echo 'Ya existe la carpeta';
	}

	echo '<hr>';

	// Borrar directorio
	// rmdir('mi_carperta');

	echo '<h1>Contenido de la carpeta</h1>';

	// Leer directorios
	if($gestor = opendir('mi_carperta')) {
		while (false !== ($archivo = readdir($gestor))) {
			if($archivo !== '.' && $archivo !== '..') {
				 echo "$archivo <br>";
			}
		}
	} 