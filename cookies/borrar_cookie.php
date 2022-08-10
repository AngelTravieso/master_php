<?php

	// Destruir cookie
	if(isset($_COOKIE['micookie'])) {

		unset($_COOKIE['micookie']);

		// Se debe caducar la cookie para poder eliminarla

		/*
			se llama y define la cookie con un valor vacio, ademas de colocar la caducidad menor a la fecha actual para borrarla

			time(): formato de la fecha actual en timestamps - 100 (se pasa) y se elimina
		*/	

		setcookie('micookie', '', time() - 100);

		// Redireccionar
		header('Location: ver_cookie.php');
		

	} else {
		header('Location: ver_cookie.php');		
	}
	

?>