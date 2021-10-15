<?php

	// for

	// $resultado = 0;

	// for ($i = 0; $i <= 100; $i++) {
	// 	$resultado += $i;
	// 	echo "<p>$resultado</p>";
	// }

	// echo "<h1>EL resultado es: $resultado</h1>";


	// Tabla de multiplicar
	if(isset($_GET['numero'])) {
		$numero = (int)$_GET['numero'];
	} else {
		$numero = 1;
	}

	echo "<h1>Tabla de Multiplicar del $numero</h1>";

	for($contador = 1; $contador <= 10; $contador++) {
		echo "$numero x $contador = " . ($numero * $contador) . "<br>";
	}


?>