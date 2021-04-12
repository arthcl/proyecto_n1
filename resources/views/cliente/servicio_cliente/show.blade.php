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
					<div class="card-footer text-center text-capitalize">
						<small class="text-muted">{{ $servicio->estado_servicio->descripcion }}</small>
					</div>
				</div>
			</div>
		</div>

		<hr>
</section>



@if($servicio->estado_servicio_id == 2)
	<!-------------- FORMULARIO ORDEN DE TRABAJO -------------------------->
<section class="col-lg-12 text-center mb-3 ">
	<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
		<li class="nav-item">
		  	<a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">
			  Ingreso de orden de trabajo
			 
			</a>
		</li>
		<li class="nav-item">
		  	<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
			  Listado de OT
			  <span class="badge badge-secondary badge-pill ml-3">{{ $servicio->orden_trabajo->count() }}</span>
			</a>
		</li>
	  </ul>
	  <div class="tab-content" id="myTabContent">
		<div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
			@include('servicio.orden_trabajo.create')
		</div>
		<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					@include('servicio.orden_trabajo.show')
					@include('servicio.orden_trabajo.create_actividad')

		</div>
	  </div>

	
	
</section>

@else

<h3 class="form-text text-muted">Servicio {{$servicio->estado_servicio->descripcion }}.</h3>

@endif

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
					<td>{{ $servicio->taller->descripcion }}</td>

				</tr>
			</tbody>
		</table>
	</section>
@endif


@endsection


