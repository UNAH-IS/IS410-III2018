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
        /*$arreglo = array(); //Se inicializa un arreglo vacio
        $arreglo[] = "Juan";//0
        $arreglo[] = "Pedro";//1
        $arreglo[] = "Maria";//2
        $arreglo[] = "Luis";//3

        for($i=0; $i<sizeof($arreglo); $i++)
            echo "Nombre $i: " . $arreglo[$i];*/

        /*$arreglo["nombre"] = "Juan";
        $arreglo["apellido"] = "Perez";
        $arreglo[0] = "Cualquier cosa";
        $arreglo[1] = 23423;
        //$arreglo[1] = new Carro();


        echo "Nombre completo: " . $arreglo["nombre"]." ".$arreglo["apellido"];*/
        
        echo "Nombre: " . $_GET["nombre"]."<br>";
        echo "Apellido: " . $_GET["apellido"]."<br>";
        echo "Edad: " . $_GET["edad"]."<br>";
        echo "Fecha: " . $_GET["fecha"]."<br>";
    ?>
</body>
</html>