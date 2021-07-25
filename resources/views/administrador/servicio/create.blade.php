@extends('layouts.dashboard')


@section('title','Servicio')
<!--------------------------------->
@section('content_header')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-lg-12 text-center col-sm-6">
				<h1 class="m-0 text-dark ">Crear nuevo servicio</h1>
				<hr>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
@endsection



@section('content')

<div class="container">
	<div class="row">
	  	<div class="col-12 col-lg-10 mx-auto mb-5">

			@include('errors.formErrors')
			<form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('servicio.store') }}"> 
				@csrf
				<input type="hidden" name="vigencia" value="1">
				<input type="hidden" name="estado_servicio_id" value="1">

				<div class="col-md-6 mb-2">
				  <label for="cliente" class="form-label">Cliente</label>
				  <select class="form-control" id="select_cliente" name="users_id" autocomplete="select_cliente" required>
					<option selected disabled value="">Seleccionar...</option>
						@foreach ($clientes as $c)
							<option value="{{$c->id}}">{{$c->nombre}}</option>
						@endforeach
				  </select>
				  <div class="invalid-feedback">
					Favor seleccionar cliente.
				  </div>
				</div>
				
				
				<div class="col-md-6 mb-2">
					<label for="vehiculo" class="form-label">Vehiculo</label>
					<select class="form-control" id="select_vehiculo" name="vehiculo_id" autocomplete="select_vehiculo" required>
					  <option selected disabled value="">Seleccionar...</option>
					</select>
					<div class="invalid-feedback">
					  Favor seleccionar vehiculo.
					</div>
				</div>

				<div class="col-md-6 mb-2">
					<label for="tipo_servicio" class="form-label">Tipo de servicio</label>
					<select class="form-control" id="select_tipo_servicio" name="tipo_servicio_id"  required>
					  <option selected disabled value="">Seleccionar...</option>
					  	@foreach ($tipo_taller as $tt)
					  		<option value="{{$tt->id}}">{{$tt->descripcion}}</option>
				  		@endforeach
					</select>
					<div class="invalid-feedback">
					  Favor seleccionar el tipo de servicio.
					</div>
				</div>

				<div class="col-md-6 mb-2">
					<label for="taller" class="form-label">Taller</label>
					<select class="form-control" id="select_taller" name="taller_id" required>
						<option selected disabled value="">Seleccionar...</option>
					</select>
					<div class="invalid-feedback">
					  Favor seleccionar taller donde intervenir vehiculo.
					</div>
				</div>

				<div class="col-md-6 mb-2">
					<label for="observacion" class="form-label">Descripción breve</label>
					<input type="text" class="form-control" id="observacion_servicio" name="observacion" placeholder="Ingrese observación si requiere." required>
				</div>


				<div class="col-12 text-center">
					<button class="btn btn-primary btn-lg mx-auto col-lg-4 offset-lg-4 ml-4 my-3" type="submit">
						<i class="far fa-save px-2"></i>
						Ingresar
					</button>
				</div>
			  </form>
{{-- 
					

				<!---Observacion Servicio -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Observación
						</span>
					</div>
					<textarea class="form-control text-dark text-capitalize" name="observacion" id="observacion_servicio" cols="30" rows="3" placeholder="Ingrese observación si requiere."></textarea>
				</div>


				<div class="col-12 text-center">
					<button class="btn btn-primary btn-lg mx-auto col-lg-4 offset-lg-4 ml-4 my-3" type="submit">
						<i class="far fa-save px-2"></i>
						Ingresar
					</button>
				</div>

			</form>

	--}}
		</div>
	</div>
</div>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
	</script>


<script src="{{ asset('js/servicio/cliente_vehiculo.js') }}" defer></script>
<script src="{{ asset('js/servicio/taller_tipo_servicio.js') }}" ></script>

@endsection