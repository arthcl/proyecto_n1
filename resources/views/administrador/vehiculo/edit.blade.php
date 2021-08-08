@extends('layouts.dashboard')


@section('title')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Editar vehiculo</h1>
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

			@include('partials.session-status')
			@include('errors.formErrors')

			<form 
			class="row g-3 needs-validation" 
			novalidate 
			method="POST" 
			action="{{ route('vehiculo.update', $vehiculo) }}" 
			accept-charset="utf-8"> 

			@method('PATCH')
			@csrf
			
			<div class="col-md-6 mb-2">
				<label for="patente" class="form-label">Patente</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="Patente" 
					type="text" 
					name="patente" 
					value="{{old('patente', $vehiculo->patente )}}">
			</div>

			<div class="col-md-6 mb-2">
				
				<label for="tipo_vehiculo" class="form-label">Tipo de vehículo</label>

				<select class="form-control" id="tipo_vehiculo" name="tipo_vehiculo_id" autocomplete="tipo_vehiculo_id">
					<option selected disabled value="{{$vehiculo->tipo_vehiculo_id}}">{{$vehiculo->tipo_vehiculo->descripcion}}</option>
					@foreach ($tipo_vehiculo as $tv)
						<option value="{{$tv->id}}">{{$tv->descripcion}}</option>
					@endforeach
				</select>
			</div>


			<div class="col-md-6 mb-2">
				
				<label for="tipo_motor" class="form-label">Tipo de motor</label>

				<select class="form-control" id="tipo_motor" name="tipo_motor_id" autocomplete="tipo_motor_id">
					<option selected disabled value="{{$vehiculo->tipo_motor_id}}">{{$vehiculo->tipo_motor->descripcion}}</option>
					@foreach ($tipo_motor as $tm)
						<option value="{{$tm->id}}">{{$tm->descripcion}}</option>
					@endforeach
				</select>
			</div>


			<!-- MARCA -->
			<div class="col-md-6 mb-2">
				
				<label for="marca_vehiculo" class="form-label">Marca vehículo</label>

				<select class="form-control" id="marca_vehiculo" name="marca_vehiculo_id" autocomplete="marca_vehiculo_id">
					<option selected disabled value="{{$vehiculo->marca_vehiculo_id}}">{{$vehiculo->marca_vehiculo->descripcion}}</option>
					@foreach ($ma_vehiculo as $mav)
						<option value="{{$mav->id}}">{{$mav->descripcion}}</option>
					@endforeach
				</select>
			</div>

			<!-- MODELO -->
			<div class="col-md-6 mb-2">
				<label for="modelo_vehiculo" class="form-label">Modelo vehículo</label>

				<!-- <input class="form-control" placeholder="modelo del auto" type="text" name="modelo" value="{{old('modelo_vehiculo')}}"> -->
				<select class="form-control" id="modelo_vehiculo" name="modelo_vehiculo_id" autocomplete="modelo_vehiculo_id">
					<option selected disabled value="{{$vehiculo->modelo_vehiculo_id}}">{{$vehiculo->modelo_vehiculo->descripcion}}</option>
				</select>
			</div>

			<div class="col-md-6 mb-2">
				<label for="ano_vehiculo" class="form-label">Año</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="ano_vehiculo" 
					type="text" 
					name="ano_vehiculo" 
					value="{{old('ano', $vehiculo->ano_vehiculo )}}">
			</div>

			<div class="col-md-6 mb-2">
				<label for="revision_tecnica" class="form-label">Fecha de control - Revisión técnica</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="revision_tecnica" 
					type="text" 
					name="revision_tecnica" 
					value="{{old('revision_tecnica', $vehiculo->revision_tecnica )}}">
			</div>

			<div class="col-md-6 mb-2">
				<label for="extintor" class="form-label">Fecha de extintor</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="Fecha de extintor" 
					type="text" 
					name="extintor" 
					value="{{old('extintor', $vehiculo->extintor )}}">
			</div>


			<div class="col-md-6 mb-2">
				<label for="permiso_circulacion" class="form-label">Fecha permiso de circulación</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="Fecha permiso de circulación" 
					type="text" 
					name="permiso_circulacion" 
					value="{{old('permiso_circulacion', $vehiculo->permiso_circulacion )}}">
			</div>

			<div class="col-md-6 mb-2">
				<label for="horometro" class="form-label">Ultimo horometro/kilometraje</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="cuenta kilometros" 
					type="text" 
					name="horometro" 
					value="{{old('horometro', $vehiculo->horometro )}}">
			</div>

			<div class="col-md-6 mb-2">
				<label for="nomenclatura_neumatico" class="form-label">Nomenclatura de neumático</label>
				<input 
					class="form-control shadow-sm border-0"
					placeholder="Nomenclatura de neumático" 
					type="text" 
					name="nomenclatura_neumatico" 
					value="{{old('nomenclatura_neumatico', $vehiculo->nomenclatura_neumatico )}}">
			</div>


			<div class="d-flex justify-content-center align-items-center btn-block">

			<button
				class="btn btn-primary mt-3 col-md-3" 
				type="">
				Actualizar
			</button>

			<a class="btn btn-outline-secondary ml-3 mt-3 col-md-3" 
			href="{{ route('vehiculo.show', $vehiculo ) }}" 
			title="">
			<i class="fas fa-undo"></i>
			</a>

			</div>
		</form>


		</div>
	</div>
</div>


<script src="{{asset('js/vehiculo/marca_modelo.js')}}" defer></script>

@endsection
