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
        include("class/class-persona.php");

        $a = 5;
        $p = new Persona();
        $p->nombre = "Juan";
        $p->apellido = "Perez";
        $p->edad = 44;
        $p->password = "asd.456";

        echo "Datos del objeto p:<br>";
        echo "Nombre: " . $p->nombre;
        
    ?>
    <?php include("pie-pagina.html"); ?>
</body>
</html>