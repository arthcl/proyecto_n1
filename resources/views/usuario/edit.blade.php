@extends('layouts.dashboard')


@section('title','PANEL -' . $usuario->name)
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Editar Usuario</h1>
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
			<p class="lead text-secondary">Actualizar usuario</p>
			@include('partials.session-status')
			@include('errors.formErrors')
			<form 
				action="{{ route('usuario.update', $usuario) }}"
				method="POST"
				accept-charset="utf-8">

				@method('PATCH')
				@csrf
				
				<div class="form-group">
					<input 
						class="form-control bg-light shadow-sm border-0"
						placeholder="rut del usuario" 
						type="text" 
						name="rut" 
						value="{{old('rut', $usuario->rut )}}">
				</div>
				<div class="form-group">
						<input 
							class="form-control bg-light shadow-sm border-0"
							placeholder="nombre del usuario" 
							type="text" 
							name="nombre" 
							value="{{old('nombre', $usuario->nombre )}}">
				</div>
				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="cantidad"
							type="text" 
							name="email" 
							value="{{old('email', $usuario->email )}}">
				</div>

				<div class="form-group">
						<input
							class="form-control bg-light shadow-sm border-0"
							placeholder="password"
							type="text" 
							name="password" 
							value="{{old('password', $usuario->password )}}">
				</div>
				<button
					class="btn btn-primary btn-large btn-block" 
					type="">
					Actualizar
				</button>
			</form>
          </section>
@endsection