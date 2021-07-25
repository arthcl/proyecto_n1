/*
$(document).ready(function ()
{

	$('#select_tipo_servicio').on('change', function() 
	{
		console.log(this.value);
		var valor = this.value;
		
		// $.ajax({
		// 	type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
		// 	url:"test.php", //url guarda la ruta hacia donde se hace la peticion
		// 	data:{
		// 		id_tiposervicio:id_tiposervicio
		// 	},
		// 	dataType : 'json',
		// 	success : function(json) {
		// 		console.log(json);
		// 		// $('<h1/>').text(json.title).appendTo('body');
		// 		// $('<div class="content"/>')
		// 		// 	.html(json.html).appendTo('body');
		// 	},
		// })

		$.ajax({
			method: 'POST',
			url: 'test.php',
			data:
			{
				valor: valor
			},
			success: function(data)
			{

				alert(data);

				// SE ESCONDE EL INPUT DE VALOR PARA DOCUMENTO CONVOCATORIA
				// $("#NUMER_numerodocumento").hide();

				// // SE IMPRIME EN HTML EL RESULTADO DEL AJAX QUE TRAE EL CAMPO COMPLETO DEL INPUT
				// $("#doc_convocatoria").html(data).fadeIn('slow');

				// // SE VALIDA EL FORMULARIO
				// validar(document.formulario_actos);

				// // SE CIERRA LA MODAL DE CARGA
				// Modal.Cerrar();

			}
		});


	});
	
});

*/

$(function(){
	$('#select_tipo_servicio').on('change', onSelectTipoServicioChange);
});

function onSelectTipoServicioChange()
{
	var tipo_servicio_id = $(this).val();
	$('#select_taller').html('<option selected disabled value="">Seleccionar...</option>');
	
	if(!tipo_servicio_id)
	{
		$('#select_taller').html('<option selected disabled value="">Seleccionar...</option>');
		return;
	}

	//ajax
	$.get('/api/tipo_servicio/'+tipo_servicio_id+'/taller', function (data){
		var html_select = '<option selected disabled value="">Seleccionar...</option>';
		for (var i=0; i<data.length; ++i)
		{
			if(data.length == 0)
			{
				html_select = '<option selected disabled value="">Sin Registro</option>';
				
			}
			else
			{
				html_select += '<option value="'+data[i].id+'">'+data[i].descripcion+'</option>';
			}
		}
		
			
			
		$('#select_taller').html(html_select);

	});
	
}





