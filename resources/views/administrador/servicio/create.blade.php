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
			@include('partials.session-status')

			<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('servicio.store') }}">

				@csrf

				<input type="hidden" name="vigencia" value="1">
				<input type="hidden" name="estado_servicio_id" value="1">

				<!---Cliente -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Cliente
						</span>
					</div>
					<select class="form-control text-dark" id="select_cliente" name="users_id" autocomplete="select_cliente">
						<option value="">Seleccionar...</option>
						@foreach ($clientes as $c)
							<option value="{{$c->id}}">{{$c->nombre}}</option>
						@endforeach
					</select>
				</div>

				<!---Vehiculo -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Vehículo
						</span>
					</div>
					<select class="form-control text-dark" id="select_vehiculo" name="vehiculo_id" autocomplete="select_vehiculo">
						<option value="">Seleccionar...</option>
					</select>
				</div>
				<!---Tipo Servicio -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Tipo Servicio
						</span>
					</div>
					<select class="form-control text-dark" id="select_tipo_servicio" name="tipo_servicio_id" autocomplete="select_tipo_servicio">
					<option value="">Seleccionar...</option>
						@foreach ($tipo_taller as $tt)
							<option value="{{$tt->id}}">{{$tt->descripcion}}</option>
						@endforeach
					</select>
				</div>

				<!---Taller -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Taller
						</span>
					</div>
					<select class="form-control text-dark" id="select_taller" name="taller_id" autocomplete="select_taller">

						<!-- JAVASCRIPT-->
						<option value="">Seleccionar...</option>
					</select>
				</div>

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
		</div>
	</div>
</div>


<script src="{{ asset('js/servicio/cliente_vehiculo.js') }}" defer></script>
<script src="{{ asset('js/servicio/taller_tipo_servicio.js') }}" ></script>

@endsection