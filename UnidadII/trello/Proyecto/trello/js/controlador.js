$(document).ready(function(){
	console.log("Se ha cargado el DOM");
	$.ajax({
		url:"ajax/usuarios.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			for (var i =0;i<respuesta.length;i++)
				$("#usuarios").append(`<label><input type="radio" value="${respuesta[i].usuario}" name="rbt-codigo-usuario"><img src="${respuesta[i].urlImagen}" class="img-responsive img-thumbnail"></label>&nbsp;`);
		},
		error:function(error){
			console.error(error);
		}
	});

	$.ajax({
		url:"ajax/listas.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			for (var i =0;i<respuesta.length;i++){
				$("#div-listas").html(
					`<div class="col-md-4" >
						<div class="well list" id="div-lista-1">
						<h4>${respuesta[i].titulo}</h4>
						</div>
					</div>`+
					$("#div-listas").html()
				);
				for(var j=0;j<respuesta[i].tarjetas.length;i++){
					console.log(`Tarjeta de la lista ${i}` + respuesta[i].tarjetas[j].titulo);
				}
			}
		},
		error:function(error){
			console.error(error);
			console.error(error.responseText);
		}
	});
});

$("#btn-login").click(function(){
	$("#form-login").fadeOut(50);
	$("#user-details").html("Mostrar esto en caso de que el usuario se haya logeado con exito, mostrar su nombre.");
	$("#user-details").fadeIn(50);
});

$("#btn-agregar-lista").click(function(){
	alert("Agregar una lista con el titulo " + $("#txt-texto-tarjeta").val());
});

function agregarTarjeta(numeroLista){
	alert("Ejecutar peticion AJAX para agregar tarjeta a la lista: " + numeroLista + ", El contenido de la tarjeta es: "+$("#txt-tarjeta-lista-" + numeroLista).val());
}

//

