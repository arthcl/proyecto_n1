$(function(){
	$('#select_region').on('change', onSelectRegionChange);
});

$(function(){
	$('#select_provincia').on('change', onSelectProvinciaChange);
});

function onSelectRegionChange()
{
	var region_id = $(this).val();
	$('#select_comuna').html('<option value="">Seleccionar...</option>');
	
	if(!region_id)
	{
		$('#select_provincia').html('<option value="">Seleccionar...</option>');
		return;
	}

	//ajax
	$.get('/api/region/'+region_id+'/provincia', function (data){
		var html_select = '<option value="">Seleccionar...</option>';
		for (var i=0; i<data.length; ++i)
			html_select += '<option value="'+data[i].id+'">'+data[i].descripcion+'</option>';
			
		$('#select_provincia').html(html_select);

	});
	
}

function onSelectProvinciaChange()
{
	var provincia_id = $(this).val();
	if(!provincia_id)
	{
		$('#select_comuna').html('<option value="">Seleccionar...</option>');
		return;
	}
	//ajax
	$.get('/api/provincia/'+provincia_id+'/comuna', function (data){
		var html_select = '<option value="">Seleccionar...</option>';
		for (var i=0; i<data.length; ++i)
			html_select += '<option value='+data[i].id+'>'+data[i].descripcion+'</option>';
			
		$('#select_comuna').html(html_select);

	});
}
