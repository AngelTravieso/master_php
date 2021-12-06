<?php

    /**
     * 777 => owner, group, others
     */

    // Leer archivo
    $archivo = $_FILES['archivo'];

    // Extraer info del archivo (nombre y tipo)
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    // Formato de img aceptados
    $tipo_imagen = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];

    // Verificar si es una imagen valida
    if(in_array($tipo, $tipo_imagen)) {
        
        // Si no existe el directorio crearlo
        if(!is_dir('images')) {
            mkdir('images', 0777);
        }

        // Mover archivo (nombre_archivo, destino)
        move_uploaded_file($archivo['tmp_name'], "images/$nombre");

        echo "<h1 style='color:green;'>Imagen subida correctamente</h1>";
        
        // Redireccionar despues de 3seg
        header('Refresh: 3; URL=index.php');
         
    } else {

        // Redireccionar despues de 3seg
        header('Refresh: 3; URL=index.php');
        echo '<h1 style="color:red;">Sube una imágen con un formato correcto, por favor...</h1>';
    }


    // echo "<pre>";
    // print_r($archivo);

    // die(); 



