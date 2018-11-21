<?php

    switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/usuarios.json","r");
            while(($linea=fgets($archivo))){
                //Cada linea es texto en formato JSON
                $registros[] = json_decode($linea,true);
            }
            //Funcion de utileria para imprimir un arrreglo en formato html
            //var_dump($registros);
            fclose($archivo);
            //Convierte el arreglo en una cadena en formato json
            echo json_encode($registros);
        break;
        case "2":
            //Solo retornará un usuario
            $archivo = fopen("../data/usuarios.json","r");
            while(($linea=fgets($archivo))){
                //Cada linea es texto en formato JSON
                $registro = json_decode($linea,true);
                if ($registro["usuario"] == $_GET["usuario"]){
                    echo json_encode($registro);
                    fclose($archivo);
                    exit();
                }
            }
            echo "El usuario no existe";
            //Funcion de utileria para imprimir un arrreglo en formato html
            //var_dump($registros);

            //Convierte el arreglo en una cadena en formato json
            
        break;
    }

?>