
<?php

	/*
		Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones
		sumar, restar multiplicar y dividir
	
	*/

	if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
		$numero1 = $_POST['numero1'];
		$numero2 = $_POST['numero2'];
		$resultado = null;

		if(isset($_POST['sumar'])) {
			$resultado = ($numero1 + $numero2);
		}

		if(isset($_POST['restar'])) {
			$resultado = ($numero1 - $numero2);
		}

		if(isset($_POST['multiplicar'])) {
			$resultado = ($numero1 * $numero2);
		}

		if(isset($_POST['dividir'])) {
			$resultado = round(($numero1 / $numero2), 2);
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora PHP</title>
</head>
<body>
	<form action="ejercicio14.php" method="POST">
		<h1>Calculadora PHP</h1>

		<input type="number" id="numero1" name="numero1" placeholder="Número 1" required>
		<input type="number" id="numero2" name="numero2" placeholder="Número 2" required>

		<br><br>

		<input type="submit" name="sumar" value="Sumar">
		<input type="submit" name="restar" value="Restar">
		<input type="submit" name="multiplicar" value="Multiplicación">
		<input type="submit" name="dividir" value="División">
	</form>

	<?= "<h2>El resultado de la operación es: $resultado</h2>" ?>
	
</body>
</html>