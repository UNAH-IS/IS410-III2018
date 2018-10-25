/*Patrón MVC Modelo Vista Controlador*/
var usuarios = []; //Arreglo vacio

var paises =[
    {nombrePais:"Honduras",abreviatura:"HN"},
    {nombrePais:"Panama",abreviatura:"PA"},
    {nombrePais:"Nicaragua",abreviatura:"NI"},
    {nombrePais:"Mexico",abreviatura:"MX"},
    {nombrePais:"El Salvador",abreviatura:"ES"}
];


//Funcion con autoejecucion (Funcion anonima)
(function(){
    for (var i = 0; i < paises.length; i++) {
        document.getElementById("pais").innerHTML += 
            `<option value="${paises[i].nombrePais}">${paises[i].nombrePais}</option>`;
    }    
})();


function registrar(){
    if(
        !validarCampoVacio(document.getElementById("firstname")) &&
        !validarCampoVacio(document.getElementById("lastname")) 
    ){
        return;
    }
    

    var usuario = {
        nombre:document.getElementById("firstname").value,
        apellido:document.getElementById("lastname").value,
        password:document.getElementById("password").value,
        correo:document.getElementById("email").value,
        fechaNacimiento:document.getElementById("birthday").value
    };
    usuarios.push(usuario); //Agregando un nuevo objeto usuario
    console.log(usuarios);

    document.getElementById("contenido-tabla").innerHTML+=
                `<tr>
                    <td>${usuario.nombre}</td>  
                    <td>${usuario.apellido}</td>  
                    <td>${usuario.fechaNacimiento}</td>  
                    <td>${usuario.correo}</td>  
                </tr>`;
}

function validarCampoVacio(campo){
    if (campo.value==""){
        campo.classList.add("campo-invalido");
        return false;
    }else{
        return true;
    }
}
/*function llenarDiv(){
    document.getElementById("contenido").innerHTML = "Hola mundo";
}*/
