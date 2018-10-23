/*Patrón MVC Modelo Vista Controlador*/
var usuarios = []; //Arreglo vacio
function registrar(){
    var usuario = {
        nombre:document.getElementById("firstname").value,
        apellido:document.getElementById("lastname").value,
        password:document.getElementById("password").value,
        correo:document.getElementById("email").value,
        fechaNacimiento:document.getElementById("birthday").value,
    };
    usuarios.push(usuario); //Agregando un nuevo objeto usuario
    console.log(usuarios);
}