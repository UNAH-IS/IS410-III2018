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
        <br>
        <img id="loading" src="img/loading.gif" style="display:none;">
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
            <tbody id="contenido-usuarios">
                <?php
                    $archivo = fopen("usuarios.json","r");// w: Write, r: Read, a+: Append/Anexar
                    while(($linea = fgets($archivo))){ //Esto lee una linea.
                        $registro = json_decode($linea,true);//Convierte una cadena que esta en formato json a un arreglo asociativo
                        echo    "<tr>
                                    <td>".$registro['nombre']."</td>
                                    <td>".$registro['apellido']."</td>
                                    <td>".$registro['edad']."</td>
                                    <td>".$registro['fecha']."</td>
                                    <td>".$registro['password']."</td>
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
            $("#loading").fadeIn(50);
            var parametros =`nombre=${$("#nombre").val()}&apellido=${$("#apellido").val()}&password=${$("#password").val()}&edad=${$("#edad").val()}&fecha=${$("#fecha").val()}&pais=${$("#pais").val()}`;

            console.log("El cliente envía esta información: "+parametros);

            //Funcion para peticiones asincronas
            $.ajax({
                url:"procesar.php",
                method:"GET",
                data: parametros,  //Enviar la información en formato URL Encoded
                dataType:"json",//El valor por defecto de la respuesta es HTML
                success:function(respuesta){
                    $("#loading").fadeOut(50);
                    $("#contenido-usuarios").append(
                        `<tr>
                            <td>${respuesta.nombre}</td>
                            <td>${respuesta.apellido}</td>
                            <td>${respuesta.edad}</td>
                            <td>${respuesta.fecha}</td>
                            <td>${respuesta.password}</td>
                        </tr>`
                    );//Anexar contenido al cuerpo de la tabla html
                    console.log("El servidor DICE: "+respuesta.nombre);
                },
                error:function(err){
                    console.log(err);
                }
            });
        });

        //XMLHttpRequest: Objeto para hacer peticiones via AJAX
    </script>
</body>
</html>