<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form>
        <input value="Juan" id="nombre" type="text" placeholder="Nombre"><br>
        <input value="Perez" id="apellido" type="text" placeholder="Apellido"><br>
        <input id="password" type="password" placeholder="Password"><br>
        <input value="44" id="edad" type="text" placeholder="Edad"><br>
        <input value="12/12/12" id="fecha" type="text" placeholder="Fecha de nacimiento"><br>
        <select id="pais">
            <option value="1">Honduras</option>
            <option value="2">Nicaragua</option>
            <option value="3">Panama</option>
            <option value="4">El Salvador</option>
        </select><br>
        <button id="btn-guardar" name="btn-guardar" type="button">Guardar información</button>
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
    <script src="js/jquery.min.js"></script>
    <script>
        $("#btn-guardar").click(function(){
            var parametros =`nombre=${$("#nombre").val()}&apellido=${$("#apellido").val()}&password=${$("#password").val()}&edad=${$("#edad").val()}&fecha=${$("#fecha").val()}&pais=${$("#pais").val()}`;

            console.log("El cliente envía esta información: "+parametros);

            //Funcion para peticiones asincronas
            $.ajax({
                url:"procesar.php",
                method:"GET",
                data: parametros,  //Enviar la información en formato URL Encoded
                success:function(respuesta){
                    console.log("El servidor DICE: "+respuesta);
                } 
            });
        });
    </script>
</body>
</html>