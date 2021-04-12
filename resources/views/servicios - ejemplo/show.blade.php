
@extends('layouts.app')


@section('title', $servicio->nombre)

@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1 class="display-5">
				{{ $servicio->nombre }}
			</h1>
			<p class="text-black-50">
				{{ $servicio->created_at->diffForHumans() }}
			</p>

			<div class="d-flex justify-content-between align-items-center">
				<a 
					href="{{ route('service.index') }}" 
					title="">
					Regresar
				</a>
				@auth
					<div class="btn-group">
						<a 
							class="btn btn-primary btn-group-sm"
							href="{{ route('service.edit', $servicio) }}" 
							title="">
							Editar
						</a>
						<a 
							class="btn btn-danger"
							href="#"
							onclick="document.getElementById('delete-service').submit()" 
							title="">
							Eliminar		
						</a>
					</div>
					
					<form 
						class="d-none" 
						id="delete-service" 
						action="{{ route('service.destroy', $servicio) }}" 
						method="POST" 
						accept-charset="utf-8">
						@csrf
						@method('DELETE')
					</form>
				@endauth
			</div>
			
		</div>
	</div>
@endsection