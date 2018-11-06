<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        //Comentarios de una linea
        /*Comentarios de multiples
        lineas */
        #Otro tipo de comentario de una linea
        $nombre = "Juan";
        //echo "<h1>Hola " . $nombre ."</h1>"; //En PHP se concatena con un punto
        
        for($i=0;$i<10;$i++){
            echo "<h1>Hola $nombre</h1>";
        }


    ?>
</body>
</html>