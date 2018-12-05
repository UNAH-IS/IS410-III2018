<?php
    switch($_GET["accion"]){
        case 1:
            include("../class/class-lista.php");
            echo Lista::obtenerListas();
        break;
        case 2:
            include("../class/class-lista.php");
            $l = new Lista(0,$_POST["tituloLista"]);
            echo $l->guardarLista();
        break;
    }
?>