<?php
    /*echo "SERVIDOR: Información recibida:".
                "," . $_GET["nombre"].
                "," . $_GET["apellido"].
                "," . $_GET["edad"].
                "," . $_GET["pais"].
                "," . $_GET["password"];*/
    sleep(10);
    $archivo = fopen("usuarios.json","a+");
    fwrite($archivo, json_encode($_GET) . "\n");
    fclose($archivo);
    echo json_encode($_GET); //Convertir un arreglo asociativo a una cadena en formato json



?>