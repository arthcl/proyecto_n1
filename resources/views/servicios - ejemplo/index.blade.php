@extends('layouts.app')


@section('title','EMG MANTENCIONES - SERVICE')

@section('content')
	<div class="container">
		
			<div class="d-flex justify-content-between align-items-center mb-3">

				<h1 class="display-5 mb-0">servicios</h1>
			
				@auth
					<a 	class="btn btn-primary" 
						href="{{ route('service.create') }}" >
						Crear servicio
					</a>
				@endauth	
			</div>
				<hr>
				
				<p class="lead text-secondary">Proyectos realizados y aquí alguna descripción respectiva</p>
				<ul class="list-group">
					@forelse ($servicio as $servicioItem)
						<li class="list-group-item border-0 mb-3 shadow-sm">
							<a 	class="d-flex justify-content-between text-secondary"
								style="text-decoration: none" 
								href="{{ route('service.show', $servicio )}}" 
								title="">
								<span class="font-weight-bold">
									{{ $servicioItem->nombre }}
								</span>
								<span class="text-black-50">
									{{ $servicioItem->created_at->diffForHumans() }} <!--//pude ser ->format(d/m/Y) -->
								</span>
								
							</a>
								
						</li>	
					@empty
						<li class="list-group-item border-0 mb-3 shadow-sm">
							No hay Servicios para mostrar aún
						</li>
					@endforelse
						{{ $servicio->links() }}
				</ul>
	
	</div>
		
@endsection