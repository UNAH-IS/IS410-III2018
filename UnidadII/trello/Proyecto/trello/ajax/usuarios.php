<?php
    include("../class/class-usuario.php");
    //Para llamar a un metodo o atributo estatico se utiliza cuatro puntos
    echo Usuario::obtenerUsuarios();
?>