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
						<div class="well list" id="div-lista-${respuesta[i].codigoLista}">
						<h4>${respuesta[i].titulo}</h4>
						<textarea id="texto-tarjeta-${respuesta[i].codigoLista}" placeholder="Nueva tarjeta" class="form-control"></textarea>
						<br><button onclick="agregarTarjeta(${respuesta[i].codigoLista});" type="button" class="btn btn-success">Agregar tarjeta</button>
						<hr>
						</div>
						
					</div>`+
					$("#div-listas").html()
				);
				for(var j=0;j<respuesta[i].tarjetas.length;j++){
					console.log(`Tarjeta de la lista ${i}` + respuesta[i].tarjetas[j].titulo);
					$(`#div-lista-${respuesta[i].codigoLista}`).append(
						`<div class="well card">
							<p>
								<img src="${respuesta[i].tarjetas[j].urlImagenUsuario}" class="img-responsive img-thumbnail">${respuesta[i].tarjetas[j].titulo}: ${respuesta[i].tarjetas[j].descripcion} 
								<br><span class="small-date">${respuesta[i].tarjetas[j].fecha}</span>
							</p>
						</div>`
					);
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


function agregarTarjeta(codigoLista){
	alert("Agregar tarjeta con el texto " + $("#texto-tarjeta-"+codigoLista).val() + " a la lista: " + codigoLista + ", El usuario que guarda la tarjeta es: " + $("input[name='rbt-codigo-usuario']:checked").val());
	//Peticion AJAX para guardar la informacion
	$.ajax({
		url:"ajax/tarjetas.php?accion=1", //En este caso accion=1 será guardar
		data:"codigoLista="+codigoLista+
				"&textoTarjeta="+$("#texto-tarjeta-"+codigoLista).val()+
				"&usuario="+$("input[name='rbt-codigo-usuario']:checked").val(),
		method:"POST",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
		},
		error:function(error){
			console.error(error);
		}
	});
}