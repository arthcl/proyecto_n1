@extends('layouts.dashboard')


@section('title','Vehículo')
<!--------------------------------->
@section('content_header')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-lg-12 text-center col-sm-6">
				<h1 class="m-0 text-dark ">Crear nuevo vehículo</h1>
				<hr>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
@endsection
<!--------------------------------->

@section('content')
<div class="container">
  	<div class="row">
	  	<div class="col-12 col-lg-10 mx-auto mb-5">
	  		@include('errors.formErrors')
	  		@include('partials.session-status')

	  		<form class="bg-white shadow rounded py-3 px-4" action="{{ route('vehiculo.store') }}" method="POST" accept-charset="utf-8">
				@csrf
    			<input type="hidden" name="vigencia" value="1">
				<!-- cliente -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Cliente
						</span>
					</div>

					<select class="form-control" id="users_id" name="users_id" autocomplete="users_id">

						<option value="">Seleccionar...</option>
						@foreach ($cliente as $c)
							<option value="{{$c->id}}">{{$c->rut}} / {{$c->nombre}}</option>
						@endforeach
					</select>
				</div>

				<hr class="my-4">


				<!-- PATENTE -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">Patente</span>
					</div>
					<input class="form-control" placeholder="Ingrese patente" type="text" name="patente" value="{{old('patente')}}">
				</div>

				<!-- MARCA -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Marca
						</span>
					</div>

					<select class="form-control" id="marca_vehiculo" name="marca_vehiculo_id" autocomplete="marca_vehiculo_id">
						<option value="">Seleccionar...</option>
						@foreach ($ma_vehiculo as $mav)
							<option value="{{$mav->id}}">{{$mav->descripcion}}</option>
						@endforeach
					</select>
				</div>

				<!-- MODELO -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Modelo
						</span>
					</div>
					<!-- <input class="form-control" placeholder="modelo del auto" type="text" name="modelo" value="{{old('modelo')}}"> -->
					<select class="form-control" id="modelo_vehiculo" name="modelo_vehiculo_id" autocomplete="modelo_vehiculo_id">
						<option value="">Seleccionar...</option>
					</select>
				</div>

				<!-- AÑO -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Año
						</span>
					</div>
					<input class="form-control" placeholder="Ingrese año" type="number" id="ano_vehiculo" name="ano_vehiculo" value="{{old('horometro')}}" maxlength="4" />
				</div>

				<!-- TIPO VEHICULO-->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Tipo vehiculo
						</span>
					</div>
					<select class="form-control" id="tipo_vehiculo_id" name="tipo_vehiculo_id" autocomplete="tipo_vehiculo_id">
						<option value="">Seleccionar...</option>
						@foreach ($t_vehiculo as $tv)
							<option value="{{$tv->id}}">{{$tv->descripcion}}
							</option>
						@endforeach
					</select>
				</div>

				<!-- TIPO MOTOR-->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Tipo motor
						</span>
					</div>
					<select class="form-control" id="tipo_motor_id" name="tipo_motor_id">
						<option value="{{ old('tipo_motor_id')}}">Seleccionar...</option>
						@foreach ($t_motor as $tipom)
							<option value="{{ old('tipo_motor', $tipom->id)}}">{{$tipom->descripcion}}
						</option>
						@endforeach
					</select>
				</div>

				<!-- REVISION TECNICA-->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Revisión tecnica
						</span>
					</div>
					<input class="form-control" placeholder="fecha de ultima revisión" type="date" name="revision_tecnica" value="{{old('revision_tecnica')}}">
				</div>

				<!-- EXTINTOR -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Fecha de recarga extintor
						</span>
					</div>
					<input class="form-control" placeholder="fecha de extintor" type="date" name="extintor" value="{{old('extintor')}}">
				</div>

				<!-- Permiso de circulación -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Permiso de circulación
						</span>
					</div>
					<input class="form-control" placeholder="fecha de permiso de circulación" type="date" name="permiso_circulacion" value="{{old('permiso_circulacion')}}">
				</div>

				<!-- horometro -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Horómetro / odometro
						</span>
					</div>
					<input class="form-control" placeholder="Ingrese horómetro / odometro" type="number" name="horometro" value="{{old('horometro')}}">
				</div>

				<!-- Nomenclatura neumatico -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Nomenclatura neumático
						</span>
					</div>
					<input class="form-control" placeholder="Ingrese nomenclatura neumático" type="text" name="nomenclatura_neumatico" value="{{old('nomenclatura_neumatico')}}">
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


	<script src="{{asset('js/vehiculo/marca_modelo.js')}}" defer></script>
@endsection




