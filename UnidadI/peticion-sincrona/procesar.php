<!--


OJO!!!!!!!!!!!!
Este archivo no se esta utilizando, la logica se paso a index.php


-->




<?php
    $archivo = fopen("usuarios.csv","a+");// w: Write, r: Read, a+: Append/Anexar
    fwrite($archivo,
        $_POST["nombre"].",".
        $_POST["apellido"].",".
        $_POST["password"].",".
        $_POST["edad"].",".
        $_POST["fecha"]."\n"
    ); //Escribir una linea en el archivo.
    fclose($archivo);
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
        ///sleep(10);//Hacer una pausa de 10 segundos
        echo "Nombre: " . $_POST["nombre"]."<br>";
        echo "Apellido: " . $_POST["apellido"]."<br>";
        echo "Edad: " . $_POST["edad"]."<br>";
        echo "Fecha: " . $_POST["fecha"]."<br>";
    ?>
</body>
</html>