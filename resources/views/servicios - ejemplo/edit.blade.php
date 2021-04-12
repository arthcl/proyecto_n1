@extends('layouts.app')


@section('title','editar servicio')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			@include('errors.formErrors')
			<form 
				class="bg-white shadow rounded py-3 px-4" 
				action="{{ route('service.update', $servicio) }}" 
				method="POST" 
				accept-charset="utf-8">
			@method('PATCH')

			<h1 class="display-5 text-center mb-3">Editar servicio</h1>
			<hr>
			@include('servicios._form', ['btn_text' => 'Actualizar'])
			</form>			
		</div>
	</div>


</div>
@endsection