//Funciones de javascript y jquery


var x = $(document);

	x.ready(iniciar);


	function iniciar(){
		var x = $(".inputOscuro");
		x.focus(enfocar);
	}

	function enfocar(){
		var x = $(this);
		x.attr("value","");
	}

$(document).ready(function(){

	$("#Acordeon .loadObras").click(function(){
		var pagina = $(this).attr("href");
		$("#insertaAjax").load(pagina);

		return false;
	});
});

// --------------------------------

 var select = $(document);
 select.ready(seleccionado);

 function seleccionado(){
 	var x = $("#tabla").on('change', function(){
 		
 		$("#campo").load("camposNuevaConsulta.php?opt=" + this.value);
 	});
 }


$(document).ready(function(){

	var contenedor = $("#divaddinput"); //contenedor
	var botonadd = $("#btnNuevaconsulta"); //Boton que agrega el campo
	var botonremove = $(".btnBorrar"); //El boton de borrar 
	//var maxInput = 15;  //por si ponemos un maximo
	var contador = 0;  //Contador que lleva la cuenta de los introducidos
	var heightNav = $('nav').height(); //cojo el margen del nav
	var arrayRelacionA = [];
	var contadorAlert = 0; // Para controlar Que solo haya un alert

	$('.debajoNav').css({          
				'background-color': '#FF0000',
				'margin-top': heightNav,
				'position':'absolute',
				'width':'100%',
				'z-index':'2000',
				'color': 'white',
				'font-weight': '700',
				'padding': '10px',
				'display':'none'
			});

	botonadd.click(function clickar(){
		// --------------------------campos---------------------------
			var textoValue = $('#campo').find(":selected").val();
			var textoSelected = $('#campo').find(":selected").text();
			var tabla = $('#tabla').find(":selected").val(); //Muestra las tabla
			
		// -----------------------------------------------------------

			if (!textoValue) {
				$('.debajoNav').css({          
					'display':'block'
				});
			}else{
				$('.debajoNav').css({          
					'display':'none'
				});

				contador++;
			//Estructura a añadir
			var estructura = '<div class="form-group aa">'+
								'<label for="'+textoValue+'" class="control-label">['+tabla+"] - "+textoValue+'</label>'+
								'<div class="input-group">'+
									'<input type="text" class="form-control" placeholder="'+textoValue+'" name="'+tabla+"-"+textoValue+'">'+
									'<span class="input-group-btn">'+
										'<button class="btn btn-success btnBorrar" type="button" style="background-color: red">'+
											'<span class="glyphicon glyphicon-remove"></span>'+
										' </button>'+
									'</span>'+
								'</div>'+
							'</div>'

			//alert(contador%2);
			if (contador%2 == 0) {
				contenedor.find('#par').append(estructura);
			}else{
				contenedor.find('#impar').append(estructura);
			};
			
			//Pone el submit cuando se ha añadido algun campo
			if (contador == 1) {
				contenedor.find('#btnConsultar').append('<input class="btn btn-button pull-right" type="submit" value="Enviar Consulta">');
			};
			

			// ---------RELACIONES-------------
			if($.inArray(tabla, arrayRelacionA) == -1)   
			{
				arrayRelacionA.push(tabla);
			    $("#relacionA").append('<option value="'+tabla+'">'+tabla+'</option>');
			    //Añado de paso la relacionB al mismo tiempo PK son IGUALES
			    $("#relacionB").append('<option value="'+tabla+'">'+tabla+'</option>');
			}
				
			//Borra el campo que ya esta introducido-----------------
			$("#campo option[value="+textoValue+"]").remove();
		
		};
		
	});

	
	$("body").on("click",".btnBorrar", function(e){
			$(this).closest(".aa").remove();
			contador--;	

			if (contador == 0)
			{
				$('#btnConsultar input').remove();
			}
	});


	// -------------------------Relaciones-R-------------------------
	$("#añadirRelacion").click(function() {
		var relA = $('#relacionA').find(":selected").val();
		var relB = $('#relacionB').find(":selected").val();
		var relR = $('#relacion-R').find(":selected").val();


		var aaaa = '<div class="alert alert-info">'+
								'<button type="button" class="cerrarAlert close" data-dismiss="alert">&times;</button>'+
								'<label for="'+relA+"-"+relB+"-"+relR+'" class="control-label text-center">'+relA+"-"+relB+"-"+relR+'</label>'+
								'<div class="input-group">'+
									'<input type="text" class="form-control hidden" placeholder="'+relA+"-"+relB+"-"+relR+'" name="'+relA+"-"+relB+"-"+relR+'">'+
								'</div>'+
							'</div>'

		if (contadorAlert < 1) {
			contenedor.find('#Relaciones').append(aaaa);
			contadorAlert++;
		};						
	});

	//Para cerrar el alert y que descuente 1 a contador
	$("body").on("click",".cerrarAlert", function(e){
			contadorAlert--;
	});


});



// --------------------------Admin---------------------------

$(document).ready(function(){

	$(".fondoPanelAdmin a").click(function(){
		var pagina = $(this).attr("href");
		$(".loadAdmin").load(pagina);
		return false;
	});
});
//modificar
$(document).ready(function(){

	$(".fondoAdminView a").click(function(){
		var pagina = $(this).attr("href");
		alert(pagina);
		$(".loadAdmin").load(pagina);

		return false;
	});
});








// --------------------------Mostrar contraseña con el OJO----------------------------
//PASS ACTUAL
$(".reveal").mousedown(function() {
    $(".pwd").replaceWith($('.pwd').clone().attr('type', 'text'));
});
$(".reveal").mouseup(function() {
	$(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
});

//Nueva PASS
$(".reveal2").mousedown(function() {
    $(".pwd2").replaceWith($('.pwd2').clone().attr('type', 'text'));
});
$(".reveal2").mouseup(function() {
	$(".pwd2").replaceWith($('.pwd2').clone().attr('type', 'password'));
});

//LOGIN
$(".revealLogin").mousedown(function() {
    $(".pwdLogin").replaceWith($('.pwdLogin').clone().attr('type', 'text'));
});
$(".revealLogin").mouseup(function() {
    $(".pwdLogin").replaceWith($('.pwdLogin').clone().attr('type', 'password'));
});



// -----------------------------HOVER NAV BAR-----------------------------
$(document).ready(function(){

		var loc = $(location).attr('href');
		$('ul.nav a').filter(function(){
		return this.href == loc;
		}).closest('li').addClass('activo');

});






// -----------------------------RELACIONES-------------------------------

$(document).ready(function(){
	//var array = [];

//PARTE A	
	$("#relacionA").on('change', function(){
 		
 		var relA = $(this).find(":selected").val();
 		var relB = $("#relacionB").find(":selected").val();

 		valor = showID(relA, relB);

 		// if($.inArray(valor, array) == -1){ //Compruebo si existe el valor
 			
 			if (valor != undefined) {
 				// array.push(valor);
 				$("#relacion-R").find(":selected").remove();
 				$("#relacion-R").append('<option value="'+valor+'">'+valor+'</option>');	
 			};	
 		// };
 	});
// PARTE B
 	$("#relacionB").on('change', function(){
 		
 		var relA = $("#relacionA").find(":selected").val();
 		var relB = $(this).find(":selected").val();

 		valor = showID(relA, relB);

 		// if($.inArray(valor, array) == -1){ //Compruebo si existe el valor
 			
 			if (valor != undefined) {
 				// array.push(valor);
 				$("#relacion-R").find(":selected").remove();
 				$("#relacion-R").append('<option value="'+valor+'">'+valor+'</option>');	
 			};	
 		// };
 	});
});



function showID(tablaA, tablaB){
	
	 if ((tablaA == 'obra') || (tablaB == 'obra')){
	 		if ((tablaA == 'titulonorm') || (tablaB == 'titulonorm')){
	 			return "idTituloNorm";
	 		}else if ((tablaA == 'responsabilidades') || (tablaB == 'responsabilidades')){
	 			return "idObra";
	 		}else if ((tablaA == 'documento') || (tablaB == 'documento')){
	 			return "idDocumento";
	 		};
	 }else if ((tablaA == 'responsabilidades') || (tablaB == 'responsabilidades')){
	 		if ((tablaA == 'nombrenorm') || (tablaB == 'nombrenorm')){
	 			return "idNombreNorm";
	 		};
	 };
}