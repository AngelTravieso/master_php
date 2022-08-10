<?php

	// Variables superglobales

	// Variables de servidor
	
	// Direccion del servidor
	echo '<h1>';
	echo $_SERVER['SERVER_ADDR'];
	echo '</h1>';

	// Nombre del servidor (dominio)
	echo '<h1>';
	echo $_SERVER['SERVER_NAME'];
	echo '</h1>';

	// Software del servidor
	echo '<h1>';
	echo $_SERVER['SERVER_SOFTWARE'];
	echo '</h1>';

	// Navegador en uso
	echo '<h1>';
	echo $_SERVER['HTTP_USER_AGENT'];
	echo '</h1>';

	// Direccion IP del cliente
	echo '<h1>';
	echo $_SERVER['REMOTE_ADDR'];
	echo '</h1>';

?>