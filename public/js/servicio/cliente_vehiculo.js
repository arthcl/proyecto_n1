$(function(){
	$('#select_cliente').on('change', onSelectClienteChange);
});

function onSelectClienteChange()
{
	var cliente_id = $(this).val();
	$('#select_vehiculo').html('<option selected disabled value="">Seleccionar...</option>');
	
	if(!cliente_id)
	{
		$('#select_vehiculo').html('<option selected disabled value="">Seleccionar...</option>');
		return;
	}

	//ajax
	$.get('/api/cliente/'+cliente_id+'/vehiculo', function (data){
		var html_select = '<option selected disabled value="">Seleccionar...</option>';
		for (var i=0; i<data.length; ++i)
		{
			if(data.length == 0)
			{
				html_select = '<option selected disabled value="">Sin Registro</option>';
				
			}
			else
			{
				html_select += '<option value="'+data[i].id+'">'+data[i].patente+'</option>';
			}
		}
		
			
			
		$('#select_vehiculo').html(html_select);

	});
	
}


