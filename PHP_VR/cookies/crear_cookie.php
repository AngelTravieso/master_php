<?php

	/*
		Cookie: Fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos o rastrear cierta información y comportamiento del mismo en la web
	*/


	// Crear Cookie (estructura)
	// setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio);

	// Cookie básica	
	setcookie('micookie', 'valor de mi galleta');

	// Cookie con exipiración
	// time(): fecha en formato timestamps
	// time()+(60*60*24*365) = 1 año
	setcookie('unyear', 'valor de mi cookie de 365 dias', time()+(60*60*24*365));

	// Redireccionar
	header('Location:ver_cookie.php');

?>