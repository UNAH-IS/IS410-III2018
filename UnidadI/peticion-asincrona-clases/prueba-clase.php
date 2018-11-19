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
        //include("class/class-persona.php");
        include("class/class-alumno.php");

        /*$a = 5;
        $p = new Persona("Pedro","Martinez",33,"asd.456","Honduras");*/
        //$p = new Persona(); //Toma todos los valores null por defecto, simulación de sobrecarga
        /*$p->setNombre("Juan");
        $p->setApellido("Perez");
        $p->setEdad(44);
        $p->setPassword("asd.456");*/

        //echo "<br>Datos del objeto p:<br>";
        /*echo "Nombre: " . $p->getNombre()."<br>";
        echo "Apellido: " . $p->getApellido();*/
        //echo $p;
        
        ///Pruebas de herencia:
        /*$a = new Alumno("Juan","Perez",33,"asd.456","Honduras","12/12/2012","20012312",4,60,7);
        echo "Registro: " . $a->__toString();*/

        //$p = new Persona("Pedro","Martinez",33,"asd.456","Honduras");

        $a = new Alumno("Juan","Perez",33,"asd.456","Honduras","12/12/2012","20012312",4,60,7);
        echo "Registro: " . $a->__toString();
    ?>
    <?php include("pie-pagina.html"); ?>
</body>
</html>