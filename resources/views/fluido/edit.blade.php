@extends('layouts.dashboard')


@section('title','PANEL - FLUIDOS')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Editar Fluidos</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
<!--------------------------------->
@section('content')
           <section class="col-lg-3 text-center connectedSortable">
			<h2 class="display-5">Actualizar</h2>
			<p class="lead text-secondary">Actualizar fluido</p>
			@include('partials.session-status')
			@include('errors.formErrors')
			<form 
				action="{{ route('fluido.update', $fluido) }}"
				method="POST"
				accept-charset="utf-8">

				@method('PATCH')
				@csrf
				

				<div class="form-group">
						<input 
							class="form-control bg-light shadow-sm border-0"
							placeholder="nombre del fluido" 
							type="text" 
							name="nombre" 
							value="{{old('nombre', $fluido->nombre )}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="cantidad"
							type="text" 
							name="cantidad" 
							value="{{old('cantidad', $fluido->cantidad )}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="marca"
							type="text" 
							name="marca" 
							value="{{old('marca', $fluido->marca )}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="valor"
							type="text" 
							name="precio" 
							value="{{old('precio', $fluido->precio )}}">
				</div>
				<button
					class="btn btn-primary btn-large btn-block" 
					type="">
					Actualizar
				</button>
			</form>
          </section>
@endsection