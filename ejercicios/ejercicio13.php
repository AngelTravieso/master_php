<?php

    /***
     * Ejercicio 2
     * 
     * 1. Una funcion
     * 2. Validar un email con filter_var
     * 3. Recoger variable por get y validarla
     * 4. Mostrar el resultado
     * 
     */


    if(isset($_GET['email']) && !empty($_GET['email'])) {
        
        $email = $_GET['email'];

        echo validarEmail($email);

    } else {
        echo "<h1>Ingrese un email válido</h1>";
    }


    function validarEmail($email) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "<h1 style='color: green'>Email: $email es válido</h1>";
        } else {
            return "<h1 style='color: red'>El email no es válido</h1>";
        }
        
    }

?>