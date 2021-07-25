@extends('layouts.dashboard')


@section('title','Ingreso de Marca')
<!--------------------------------->
@section('content_header')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-lg-12 text-center col-sm-6">
				<h1 class="m-0 text-dark ">Ingresar Marca</h1>
				<hr>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
@endsection

@section('content')

<div class="container">
	<div class="row">
	  	<div class="col-12 col-lg-10 mx-auto mb-5">

			@include('errors.formErrors')
			<form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('marca.store') }}"> 
				@csrf
				<input type="hidden" name="vigencia" value="1">
                
				<div class="col-md-6 mb-2">
					<label for="descripcion" class="form-label">marca de vehiculo</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese nombre de la marca de vehiculo." required>
				</div>

				<div class="col-12 text-center">
					<button class="btn btn-primary btn-lg mx-auto col-lg-4 offset-lg-4 ml-4 my-3" type="submit">
						<i class="far fa-save px-2"></i>
						Ingresar
					</button>
				</div>
			  </form>
 
				
		</div>
	</div>
</div>

<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
	</script>
@endsection