@extends('layouts.app')


@section('title','ERROR 404')

@section('content')
<div class="container">
	<div class="text-center">
	<h1>pagina no encontrada</h1>
		<a 
			href="{{ URL::previous() }}"
			title=""
			>Volver atras</a>	
	</div>
	
</div>

@endsection