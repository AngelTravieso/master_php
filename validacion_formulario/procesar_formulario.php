<?php

	$error = 'faltan_datos';

	if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {

		$error = 'ok';

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$edad = (int) $_POST['edad'];
		$email = $_POST['email'];
		$password = $_POST['pass'];


		// Validar el nombre
		if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
			$error = 'nombre';
		}


		// Validar el apellido
		if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
			$error = 'apellidos';
		}


		// Validar la edad
		if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
			$error = 'edad';
		}


		// Validar el email
		if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = 'email';
		}


		// Validar la password
		if(empty($password) || strlen($password) < 5) {
			$error = 'password';
		}


		/*
			var_dump($_POST);
			var_dump($error);
			die();
		*/


	} else {
		$error = 'faltan_valores';
		header("Location: index.php?error=$error");
	}


	if($error != 'ok') {
		header("Location: index.php?error=$error");
	}


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación Formularios PHP</title>
</head>
<body>
	<?php if($error == 'ok'): ?>

		<h1 style="color:green">Datos validados correctamente</h1>

		<p>Nombre: <?= $nombre ?></p>
		<p>Apellidos: <?= $apellidos ?></p>
		<p>Edad: <?= $edad ?></p>
		<p>Email: <?= $email ?></p>
		<p>Password: <?= $password ?></p>
	<?php endif; ?>
	
</body>
</html>