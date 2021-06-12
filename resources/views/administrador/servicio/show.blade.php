@extends('layouts.dashboard')
@section('title','Servicio - ' . $servicio->observacion )
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark text-capitalize">{{ $servicio->observacion }}</h1>
						<hr>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')
<section class="col-lg-12 text-center mb-3 ">
	
<div class="row">
	<div class="col-lg-6">
	<!---VEHICULO -->
		<div class="input-group mb-3">
			<div class="input-group-prepend w-25">
				<span class="input-group-text w-100 text-justify">
					Vehículo
				</span>
			</div>
			<label class="font-weight-normal form-control" id="">
				{{ $servicio->vehiculo->patente }}
			</label>	
		</div>

	<!---CLIENTE -->
		<div class="input-group mb-3">
			<div class="input-group-prepend w-25">
				<span class="input-group-text w-100  text-justify">
					Cliente
				</span>
			</div>
			<label class="font-weight-normal form-control" id="">
				{{ $servicio->vehiculo->cliente->nombre }}
			</label>	
		</div>

	<!---TALLER ASIGNADO -->
		<div class="input-group mb-3">
			<div class="input-group-prepend w-25">
				<span class="input-group-text w-100 text-justify">
					Taller
				</span>
			</div>
			<label class="font-weight-normal form-control" id="">
				{{ $servicio->taller->descripcion }}
			</label>	
		</div>
	
	<!-- TIPO DE SERVICIO-->

		<div class="input-group mb-3">
			<div class="input-group-prepend w-25">
				<span class="input-group-text w-100">
					Tipo de servicio
				</span>
			</div>
			<label class="font-weight-normal form-control" id="">
				{{ $servicio->tipo_servicio->descripcion }}
			</label>
		</div>
	<!-- FECHA DE CREACIÓN-->

		<div class="input-group mb-3">
			<div class="input-group-prepend w-25">
				<span class="input-group-text w-100">
					creación
				</span>
			</div>
			<label class="font-weight-normal form-control" id="">
			{{$servicio->created_at->diffForHumans()}}
			</label>
		</div>
	</div>	
	<div class="col-lg-6">
		<div  class="card">
			<div class="card-header">
				Configuración del servicio
			</div>

			<div class=" card-body">
				<form class="form-inline" action="{{ route('servicio.update', $servicio) }}" method="POST" accept-charset="utf-8">
					@method('PATCH')
					@csrf
					<div class="form-group mx-sm-3 mb-2">
						<select placeholder="Seleccione estado del servicio" class="custom-select form-control text-capitalize" id="" name="estado_servicio_id">
							<option value="0">Seleccionar...</option>
							@foreach ($estadoservicio as $es)
								<option value="{{$es->id}}">
									{{$es->descripcion}}
								</option>
							@endforeach  								
						</select>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Actualizar</button>
				</form>
			</div>
			<div class="card-footer text-center text-capitalize ">
				<small class="text-muted">{{ $servicio->estado_servicio->descripcion }}</small>
			</div>
		</div>
	</div>
</div>

<hr>
</section>

@if($servicio->estado_servicio_id == 2)
	<!-------------- FORMULARIO ORDEN DE TRABAJO // servicio ejecutandose -------------------------->
<section class="col-lg-12 mb-3 d-flex">

	<div class="col-6">
		@include('administrador.servicio.orden_trabajo.create')
	</div>
	<div class="col-6">

		@include('administrador.servicio.orden_trabajo.show')
	</div>
</section>
@else
<h3 class="form-text text-muted">Servicio {{$servicio->estado_servicio->descripcion }}.</h3>
@endif
<!---------------------- SERVICIO FINALIZADO --------------------- ------------------------>
@if ($servicio->estado_servicio_id == 3)
	<section class="col-lg-12 text-center mb-3">
		<table class="table table-bordered  bg-white">
			<thead>
				<tr>
					<th scope="col">Patente</th>
					<th class="w-25" scope="col">Taller</th>
					<th class="w-25" scope="col">Servicio</th>
					<th class="w-25" scope="col">descripcion</th>
					<th class="w-25" scope="col">fecha</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td >{{ $servicio->vehiculo->patente }}</td>
					<td >{{ $servicio->taller->descripcion }}</td>
					<td >{{ $servicio->tipo_servicio->descripcion }}</td>
					<td >{{ $servicio->observacion }}</td>
					<td>{{ $servicio->updated_at->format('d-m-Y H:m') }}</td>

				</tr>
			</tbody>
		</table>
	</section>
@endif


@endsection


