<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imprimir</title>
</head>
<body>
	<h1>Master en PHP <?php echo 'Angel Travieso'; ?></h1>

	<?='Bienvenido al curso de PHP'?>

	<?php
		// Titular de la seccion
		echo '<h3>Listado de Videojuegos: </h3>';

		/* Esta es una
			lista de videojuegos
		 */
		echo '<ul>'
				. '<li>GTA</li>'
				. '<li>FIFA</li>'
				. '<li> Mario Bros</li>'
				. '</ul>';

		// echo '<br> Hola <br>';

		// Parrafo explicativo 
		echo '<p>Esta es toda'.' - '.'lista de juegos </p>';

	?>
</body>
</html>

