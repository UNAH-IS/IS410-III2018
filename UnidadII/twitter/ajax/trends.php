<?php
    $archivo = fopen("../data/trendings.json","r");
    $registros=array();
    while(($linea=fgets($archivo))){
        $registros[] = json_decode($linea);
    }
    echo json_encode($registros);
    fclose($archivo);

?>