<?php
    if (isset($_POST["btn-guardar"])){
        sleep(10);
        $archivo = fopen("usuarios.csv","a+");// w: Write, r: Read, a+: Append/Anexar
        fwrite($archivo,
            $_POST["nombre"].",".
            $_POST["apellido"].",".
            $_POST["password"].",".
            $_POST["edad"].",".
            $_POST["fecha"]."\n"
        ); //Escribir una linea en el archivo.
        fclose($archivo);
        echo "Se guardo el registro exitosamente.";
    }
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
    <form action="index.php" method="POST">
        <input value="Juan" name="nombre" type="text" placeholder="Nombre"><br>
        <input value="Perez" name="apellido" type="text" placeholder="Apellido"><br>
        <input name="password" type="password" placeholder="Password"><br>
        <input value="44" name="edad" type="text" placeholder="Edad"><br>
        <input value="12/12/12" name="fecha" type="text" placeholder="Fecha de nacimiento"><br>
        <select name="pais">
            <option value="1">Honduras</option>
            <option value="2">Nicaragua</option>
            <option value="3">Panama</option>
            <option value="4">El Salvador</option>
        </select><br>
        <button name="btn-guardar" type="submit">Guardar información</button>
    </form>
    <div>
        <table>
            <thead>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Password</td>
                <td>Edad</td>
                <td>Fecha</td>
            </thead>
            <tbody>
                <?php
                    $archivo = fopen("usuarios.csv","r");// w: Write, r: Read, a+: Append/Anexar
                    while(($linea = fgets($archivo))){ //Esto lee una linea.
                        $partes = explode(",",$linea); //Retorna un arreglo con cada token
                        
                        echo    "<tr>
                                    <td>$partes[0]</td>
                                    <td>$partes[1]</td>
                                    <td>$partes[2]</td>
                                    <td>$partes[3]</td>
                                    <td>$partes[4]</td>
                                </tr>";
                    }
                    fclose($archivo);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>