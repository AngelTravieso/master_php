<?php

	/*
		Crear una sesión que aumente su valor en uno o disminuya en uno en función de si el parametro GET counter está a uno o a cero

	*/

	
	// Abrir sesión
	session_start();

	
	if(!isset($_SESSION['counter'])) {

		$_SESSION['counter'] = 0;

	}

		
	if( isset($_GET['counter']) && $_GET['counter'] == 1) {
		$_SESSION['counter']++;
	}

	if( isset($_GET['counter']) && $_GET['counter'] == 0) {
		$_SESSION['counter']--;
	}


?>

<h1>El valor de la sesión es: <?= $_SESSION['counter'] ?></h1>
<a href='ejercicio12.php?counter=1'>Incrementar</a><br>
<a href='ejercicio12.php?counter=0'>Decrementar</a>



