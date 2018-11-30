<?php
    switch($_GET["accion"]){
        case 1:
            //Guardar tarjeta en el archivo correspondiente:
            $archivo = fopen("../data/tarjetas/tarjetas-lista-".$_POST["codigoLista"].".json","a+");
            $registro = array();
            $registro["titulo"] = "Aun no se captura";
            $registro["descripcion"] = $_POST["textoTarjeta"];
            $registro["fecha"] = "12-12-2012";
            $registro["urlImagenUsuario"] = "Obtener imagen de ".$_POST["usuario"];
            
            fwrite($archivo, json_encode($registro)."\n");
            echo json_encode($registro);
        break;
    }

?>