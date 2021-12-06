<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos PHP`</title>
</head>
<body>

    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- multiple para subir multiples archivos (name="archivo[]") -->
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>
    
    <?php

        if(is_dir('images')):
            echo '<h2>Listado de imágenes</h2>:';

            $gestor = opendir('./images');


            // Lista de archivos incluidas en el path
            // $dir = scandir('./images');

            // print_r($dir);

            if($gestor):
                while(($image = readdir($gestor)) !== false):
                    if($image !== '.' && $image != '..'):
                        echo "<img src='images/$image' width='200px'> <br>";
                    endif;
                endwhile;
            endif;
        endif;

    ?>
    
</body>
</html>