@extends('layouts.dashboard_cliente')


@section('title','ASIGNAR-VEHíCULOS')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-lg-12 text-center col-sm-6">
			<h1 class="m-0 text-dark ">Vehículos</h1>
			<hr>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
@endsection


@section('content')
<section class="col-lg-12 connectedSortable mx-auto">
    
	<div class="col-12 text-right">
		<a class="btn btn-primary" href="{{route('vehiculo.create')}}" title=""><i class="fa fa-plus" aria-hidden="true"></i>
			Agregar Vehículo
		</a>
	</div>

	<div class="col-12 mt-3 table-responsive">
		<h2 class="h4 text-dark">Lista de Vehículos</h2>
		<table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Cliente</th>
					<th scope="col">Patente</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Año</th>
					<th scope="col">Tipo Vehículo</th>
					<th scope="col">Acción</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($vehiculo as $v)
						<tr class="shadow-sm">
							<th scope="row" class="font-weight-bold">{{ $v->id ?? '--'}}</th>
							<td>{{ $v->cliente->nombre ?? '--'}}</td>
							<td>{{ $v->patente ?? '--'}}</td>
							<td>{{ $v->marca_vehiculo->descripcion ?? '--'}}</td>
							<td>{{ $v->modelo_vehiculo->descripcion ?? '--'}}</td>
							<td>{{ $v->ano_vehiculo ?? '--' }}</td>
							<td>{{ $v->tipo_vehiculo->descripcion ?? '--'}}</td>
							  
							
							<td class="text-center">

								<a class="btn btn-info btn-sm d-flex" href="{{ route('vehiculo.show', $v) }}" title="">
									<i class="fa fa-eye px-2 my-auto" aria-hidden="true"></i>
									Ver
								</a>
							</td>
						</tr>
					@empty
							<p class="lead text-secondary">No existen registros aún</p>
					@endforelse

			</tbody>
		</table>
	</div>

			
</section>
@endsection