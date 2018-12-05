<?php
    switch($_GET["accion"]){
        case 1:
            //Guardar tarjeta en el archivo correspondiente:
            $archivo = fopen("../data/tarjetas/tarjetas-lista-".$_POST["codigoLista"].".json","a+");
            $registro = array();
            $registro["titulo"] = $_POST["tituloTarjeta"];
            $registro["descripcion"] = $_POST["textoTarjeta"];
            $registro["fecha"] = $_POST["fechaTarjeta"];
            //$registro["urlImagenUsuario"] = "Obtener imagen de ".$_POST["usuario"];
            
            $archivoUsuarios = fopen("../data/usuarios.json","r");
            
            while(($linea = fgets($archivoUsuarios))){
                $registroUsuario = json_decode($linea,true);
                if($registroUsuario["usuario"] == $_POST["usuario"]){
                    //Obtener la url de la imagen
                    $registro["urlImagenUsuario"] =$registroUsuario["urlImagen"];
                    break;
                }
            }
            fclose($archivoUsuarios);

            fwrite($archivo, json_encode($registro)."\n");
            echo json_encode($registro);
            fclose($archivo);
        break;
    }

?>