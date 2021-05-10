@extends('layouts.dashboard')


@section('title','USUARIOS')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 col-sm-6 text-center">
						<h1 class="m-0 text-dark">Usuarios</h1>
						<hr>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection
<!--------------------------------->
@section('content')
<section class="col-lg-12 connectedSortable mx-auto">
	@include('partials.session-status') 
	
		<div class="col-12 text-right">
			<a class="btn btn-primary" href="{{route('usuario.create')}}" title=""><i class="fa fa-plus" aria-hidden="true"></i>
				Agregar Cliente
			</a>
		</div>
		
		<div class="col-12 mt-3 table-responsive">
			<h2 class="h4 text-dark my-3">Listado de Clientes</h2>
			<table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Rut</th>
						<th scope="col">Nombres</th>
						<th scope="col">Ap.Paterno</th>
						<th scope="col">Ap.Materno</th>
						<th scope="col">Provincia</th>
						<th scope="col">Comuna</th>
						<th scope="col">Móvil</th>
						<th scope="col">Teléfono Fijo</th>
						<th scope="col">Correo</th>
						<th scope="col">Tipo Cliente</th>
						<th scope="col">Acción</th>
					</tr>
				</thead>
				<tbody>
					@forelse($cliente as $u)
						<tr class="shadow-sm">
							<th scope="row" class="font-weight-bold">{{ $u->rut ?? '--'}}</th>
							<td>{{ $u->nombre ?? '--'}}</td>
							<td>{{ $u->a_paterno ?? '--'}}</td>
							<td>{{ $u->a_materno ?? '--'}}</td>
							<td>{{ $u->comuna->provincia->descripcion ?? '--' }}</td>
							<td>{{ $u->comuna->descripcion ?? '--'}}</td>
							<td>{{ $u->telefono_1 ?? '--'}}</td>
							<td>{{ $u->telefono_2 ?? '--'}}</td>
							<td>{{ $u->email ?? '--'}}</td>
							<td>{{ $u->tipo_cliente->descripcion ?? '--'}}</td>               
							<!-- <td>{{ $u ? $u->diffForHumans: '-' }}</td> -->
							<td class="text-center">
								<!-- <a class="btn btn-info btn-sm" href=" route('usuario.show', $u) " title=""> Ver</a> -->
								<a class="btn btn-info btn-sm d-flex" href="{{ route('usuario.show', $u) }}" title="">
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
	
		
		<div class="col-12 mt-3  mb-5 table-responsive">
			<h2 class="h4 text-dark my-3">Roles</h2>
			<table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Rut</th>
						<th scope="col">Nombres</th>
						<th scope="col">Móvil</th>
						<th scope="col">Teléfono Fijo</th>
						<th scope="col">Correo</th>
						<th scope="col">Tipo Cliente</th>
						<th scope="col">Creado</th>
						<th scope="col">Acción</th>

					</tr>
				</thead>
				<tbody>
					@forelse($roles as $r)
						<tr class="shadow-sm">
							
							<th scope="row" class="font-weight-bold">{{ $r->rut ?? '--'}}</th>
							<td>{{ $r->nombre ?? '--'}}</td>
							<td>{{ $r->telefono_1 ?? '--'}}</td>
							<td>{{ $r->telefono_2 ?? '--'}}</td>
							<td>{{ $r->email ?? '--'}}</td>
							<td>{{ $r->tipo_cliente->descripcion ?? '--'}}</td>               
							<td>{{ $r->created_at->diffForHumans() ?? '--'}}</td>
							<td class="text-center">
								<!-- <a class="btn btn-info btn-sm" href=" route('usuario.show', $r) " title=""> Ver</a> -->
								<a class="btn btn-info btn-sm d-flex" href="{{ route('usuario.show', $r) }}" title="">
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
			{{$roles->links()}}
				 
		</div>
		
</section>
<!---------------------------------------------------------------->
@endsection