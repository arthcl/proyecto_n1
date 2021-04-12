@extends('layouts.dashboard')


@section('title','FLUIDOS')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Fluidos</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
<!--------------------------------->
@section('content')
	<section class="col-lg-9 text-center connectedSortable mx-auto mb-5">
		
        <div class="container">
		
			<div class="d-flex justify-content-between align-items-center mb-3">

				<h3 class=" mb-0">Listado</h3>
				@include('partials.session-status')
				@include('errors.formErrors')
			</div>
				<hr>
				
				<p class="lead text-secondary">Selecciona para ver detalles o editar</p>
				<ul class="list-group">
					@forelse ($fluido as $item)
						<li class="list-group-item border-0 mb-3 shadow-sm">
							
							<a 	class="d-flex justify-content-between text-secondary"
								style="text-decoration: none" 
								href="{{ route('fluido.show', $item )}}" 
								title="">
								<span class="font-weight-bold">
									{{ $item->nombre }}
								</span>

								<span class="text-black-50">
									{{ $item->created_at->diffForHumans() }} <!--//pude ser ->format(d/m/Y) -->
								</span>
								
							</a>
								
						</li>	
					@empty
						<li class="list-group-item border-0 mb-3 shadow-sm">
							No hay fluidos para mostrar aún
						</li>
					@endforelse
						{{ $fluido->links() }}
				</ul>
	
		</div>	
    </section>
          <!-------------------------------------------------------------- -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-3 text-center connectedSortable">
			<h2 class="display-5">Ingresar</h2>
			<p class="lead text-secondary">Registrar fluidos</p>
			
			<form 
				action="{{ route('fluido.store') }}"
				method="POST"
				accept-charset="utf-8">
			
				@csrf
				<div class="form-group">
						<input 
							class="form-control bg-light shadow-sm border-0"
							placeholder="nombre del fluido" 
							type="text" 
							name="nombre" 
							value="{{old('nombre')}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="cantidad"
							type="text" 
							name="cantidad" 
							value="{{old('cantidad')}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="marca"
							type="text" 
							name="marca" 
							value="{{old('marca')}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="valor"
							type="text" 
							name="precio" 
							value="{{old('precio')}}">
				</div>
				<button
					class="btn btn-primary btn-large btn-block" 
					type="">
					Ingresar
				</button>
			</form>
    </section>
@endsection