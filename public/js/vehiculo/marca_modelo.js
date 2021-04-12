$(function(){
	$('#marca_vehiculo').on('change', onSelectMarcaChange);
});

function onSelectMarcaChange()
{
	var marca_id = $(this).val();
	$('#modelo_vehiculo').html('<option value="">Seleccionar...</option>');
	
	if(!marca_id)
	{
		$('#modelo_vehiculo').html('<option value="">Seleccionar...</option>');
		return;
	}

	//ajax
	$.get('/api/marca/'+marca_id+'/modelo', function (data){
		var html_select = '<option value="">Seleccionar...</option>';
		for (var i=0; i<data.length; ++i)

				html_select += '<option value="'+data[i].id+'">'+data[i].descripcion+'</option>';
			
		$('#modelo_vehiculo').html(html_select);

	});
	
}




