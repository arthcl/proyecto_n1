@extends('layouts.app')


@section('title','crear servicio')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			@include('partials.session-status')
			@include('errors.formErrors')
			
			<form 
				class="bg-white shadow rounded py-3 px-4" 
				action="{{ route('service.store', $servicio) }}" 
				method="POST" 
				accept-charset="utf-8">
			@csrf
			<h1 class="display-5 text-center mb-3">Crear servicio</h1>
			<hr>
			@include('servicios._form', ['btn_text' => 'Guardar'])
			
			</form>			
		</div>
	</div>


</div>

@endsection