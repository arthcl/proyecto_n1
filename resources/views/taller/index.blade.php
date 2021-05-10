@extends('layouts.dashboard')


@section('title','Talleres')
<!--------------------------------->
@section('content_header')
  <div class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-lg-12 text-center col-sm-6">
			<h1 class="m-0 text-dark">Listado Talleres</h>
			<hr>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
@endsection
<!--------------------------------->
@section('content')
<section class="col-lg-12 connectedSortable mx-auto">

		<div class="col-12 text-right">
			<a class="btn btn-primary" href="{{route('taller.create')}}" title=""><i class="fa fa-plus" aria-hidden="true"></i>
				Agregar Taller
			</a>
		</div>

		<div class="col-12 mt-3 table-responsive">
			<h2 class="h4 text-dark mb-3">Listado de Talleres</h2>

			<table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Rut</th>
						<th scope="col">Razón Social</th>
						<th scope="col">Nombre</th>
						<th scope="col">Región</th>
						<th scope="col">Comuna</th>
						<th scope="col">Móvil</th>
						<th scope="col">Teléfono Fijo</th>
						<th scope="col">Correo</th>
						<th scope="col">Tipo Taller</th>
						<th scope="col">Acción</th>
					</tr>
				</thead>
				<tbody>
					@forelse($taller as $taller)
						<tr class="shadow-sm">
							<th scope="row" class="font-weight-bold">{{ $taller->id }}</th>
							<td>{{ $taller->rut ?? ' - ' }}</td>
							<td>{{ $taller->razon_social ?? ' - ' }}</td>
							<td>{{ $taller->descripcion ?? ' - ' }}</td>
							<td>{{ $taller->comuna->provincia->descripcion ?? ' - ' }}</td>
							<td>{{ $taller->comuna->descripcion ?? ' - ' }}</td>
							<td>{{ $taller->telefono_1 ?? ' - ' }}</td>
							<td>{{ $taller->telefono_2 ?? ' - ' }}</td>
							<td>{{ $taller->email ?? ' - ' }}</td>
							<td>
								{{$tipo_servicio}}
								
							</td>
							<td class="text-center">
								<!-- <a href="  route('usuario.show', $taller->id)  " title=""><i class="fas fa-eye"></i></a> -->
								<a class="btn btn-info btn-sm d-flex" href="{{ route('taller.show', $taller) }}" title="">
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

		  <!---------------------------------------------------------------->
@endsection