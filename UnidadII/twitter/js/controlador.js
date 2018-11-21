$(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico");
	///Peticion AJAX para obtener usuarios
	$.ajax({
		url:"ajax/usuarios.php?opcion=1",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#slc-usuario").append(`<option value=""></option>`);
			for(var i=0; i<respuesta.length;i++)
				$("#slc-usuario").append(`<option value="${respuesta[i].usuario}">${respuesta[i].nombre} ${respuesta[i].apellido}</option>`);
		},
		error:function(error){
			console.log(error);
		}
	});

	//Obtener los trends
	$.ajax({
		url:"ajax/trends.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			for(var i=0; i<respuesta.length;i++)
				$("#trends").append(`<div><span class="blue-text">${respuesta[i].trending}</span> <small>${respuesta[i].tweets} tweets</small></div>`);
		},
		error:function(error){
			console.log(error);
		}
	});

	//Obtener los tweets guardados
	$.ajax({
		url:"ajax/tweets.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			for (var i=0;i<respuesta.length;i++){
				$("#tweets").append(
					`<div class="row component text-left">
						<div class="col-lg-2">  
							<img src = "${respuesta[i].usuario.urlImagen}" class="img-fluid rounded-circle img-thumbnail">
						</div>
						<div class="col-lg-10">
							<b>${respuesta[i].usuario.nombre}</b> ${respuesta[i].usuario.usuario}
							<div class="tweet-content">
								${respuesta[i].tweet}
								<div>
									<small class="blue-text">${respuesta[i].hashtags}</small>
								</div>
							</div>
						</div>
					</div>`
				);
			}

		},
		error:function(error){
			console.log(error);
		}
	});
});

$("#slc-usuario").change(function(){
	//Esta funcion se ejecuta cada vez que el usuario selecciona o cambia un elemento de la lista.
	console.log("Usuario seleccionado: " + $("#slc-usuario").val());
	$.ajax({
		url:"ajax/usuarios.php?opcion=2&usuario="+$("#slc-usuario").val(),
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#imagen-usuario").attr("src",respuesta.urlImagen);
			$("#nombre").html(respuesta.nombre+" "+respuesta.apellido);
			$("#usuario").html(respuesta.usuario);
			$("#cantidad-tweets").html(respuesta.tweets);
			$("#following").html(respuesta.following);
			$("#followers").html(respuesta.followers);

		},
		error:function(error){
			console.log(error);
		}
	});
});

$("#btn-enviar-tweet").click(function(){
	var parametros=`tweet=${$("#txt-tweet").val()}&hashtags=${$("#txt-hashtags").val()}&usuario=${$("#slc-usuario").val()}`;
	console.log(parametros);
});