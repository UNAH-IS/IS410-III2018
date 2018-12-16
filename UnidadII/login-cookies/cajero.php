<?php 
    if (!isset($_COOKIE["usuario"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Bienvenido cajero</h1>
    <p>Usuario logueado: <?php echo $_COOKIE["usuario"];  ?></p>
    <a href="cerrar-sesion.php">Cerrar Sesion</a>
</body>
</html>