<?php
    switch($_GET["opcion"]){
        case "1":
            $archivo = fopen("../data/tweets.json","r");
            $registros=array();
            while(($linea=fgets($archivo))){
                $registros[] = json_decode($linea);
            }
            echo json_encode($registros);
            fclose($archivo);
        break;
        case "2":
            //Leer el archivo de usuarios para otener los demas datos del usuario
            $archivo = fopen("../data/usuarios.json","r");
            $registro=array();
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if ($registro["usuario"] == $_POST["usuario"]){
                    break;//Se encontro el registro
                }
            }
            
            $respuesta["usuario"]=  [
                                        "usuario"=>$_POST["usuario"],
                                        "nombre"=>$registro["nombre"],
                                        "urlImagen"=>$registro["urlImagen"]
                                    ];
            $respuesta["tweet"] = $_POST["tweet"];
            $respuesta["hashtags"] = $_POST["hashtags"];
            fclose($archivo);

            $archivo = fopen("../data/tweets.json","a+"); //Anexar un nuevo tweet
            fwrite($archivo, json_encode($respuesta)."\n");
            fclose($archivo);
            echo json_encode($respuesta);
            /* Se tiene que guardar un json con la siguiente estructura:
            {
                "usuario":
                {
                    "usuario":"@goku",
                    "nombre":"Goku",
                    "urlImagen":"img/profile-pics/goku.jpg"
                },
                "tweet":"Hola!, soy Goku!",
                "hashtags":"#lorem #ipsum"
            }*/


        break;
    }
?>