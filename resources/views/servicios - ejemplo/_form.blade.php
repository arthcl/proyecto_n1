@csrf
<div class="form-group">
		<input 
			class="form-control bg-light shadow-sm border-0"
			placeholder="Titulo del servicio" 
			type="text" 
			name="nombre" 
			value="{{old('nombre', $servicio->nombre)}}">
</div>
<button
	class="btn btn-primary btn-large btn-block" 
	type="">
	{{ $btn_text }}
</button>
	<a class="btn btn-link btn-block" 
		href="{{ route('service.index') }}" 
		title="">
		Cancelar
	</a>

