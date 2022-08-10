<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formularios PHP</title>
</head>
<body>
	<h1>Validar formularios en PHP</h1>

	<?php
		if(isset($_GET['error'])) {
			$error = $_GET['error'];
			if($error == 'faltan_valores') {
				echo '<strong style="color:red">Introduce todos los datos</strong>';
			}

			if($error == 'nombre') {
				echo '<strong style="color:red">Introduce bien el nombre</strong>';
			}

			if($error == 'apellidos') {
				echo '<strong style="color:red">Los apellidos no son correctos</strong>';
			}

			if($error == 'edad') {
				echo '<strong style="color:red">Introduce una edad correcta</strong>';
			}

			if($error == 'email') {
				echo '<strong style="color:red">El correo es erróneo</strong>';
			}

			if($error == 'password') {
				echo '<strong style="color:red">Introduce una contraseña de más de 5 letras</strong>';
			}
		}

	?>

	<form action="procesar_formulario.php" method="POST">
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" name="nombre" required="required" pattern="[a-zA-Z]+">
		</p>

		<p>
			<label for="apellidos">Apellidos</label>
			<input type="text" id="apellidos" name="apellidos" required="required" pattern="[a-zA-Z]+">
		</p>

		<p>
			<label for="edad">Edad</label>
			<input type="number" id="edad" name="edad" required="required" pattern="[0-9]+">
		</p>

		<p>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required="required">
		</p>

		<p>
			<label for="pass">Contraseña</label>
			<input type="password" id="pass" name="pass" required="required" minlength="5">
		</p>


		<input type="submit" value="Enviar">
		
	</form>
	
</body>
</html>