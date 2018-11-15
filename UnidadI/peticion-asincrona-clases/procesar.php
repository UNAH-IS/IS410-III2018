<?php
    include("class/class-persona.php");
    $p = new Persona($_GET["nombre"],$_GET["apellido"],$_GET["edad"],$_GET["pais"],$_GET["password"]);
    echo $p->registrarPersona();    

?>