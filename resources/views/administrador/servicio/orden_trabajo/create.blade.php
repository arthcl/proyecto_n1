

@include('errors.formErrors')


		<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Ingresar OT</span>
		</h4>
		<form class="needs-validation" novalidate method="POST" action="{{ route('orden_trabajo.store') }}">
			@csrf
			<input type="hidden" name="servicio_id"  value="{{ $servicio->id }}">
			<input type="hidden" name="vigencia"  value="1">
			<input type="hidden" name="estado_orden_trabajo_id"  value="1">
				<div class="form-row mb-5">

					<div class="col-md-6 mb-3">
						<label for="fecha_inicio">Fecha de inicio</label>
						<input type="date" class="form-control" name="fecha_inicio" placeholder="Ingresar fecha de inicio" required>
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
						<div class="invalid-feedback">
							Favor ingresar fecha de inicio.
						</div>
					</div>

					  <div class="col-md-6 mb-3">
						<label for="fecha_termino">Fecha de termino</label>
						<input type="date" class="form-control" name="fecha_termino" placeholder="Ingresar fecha de inicio" required>
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
						<div class="invalid-feedback">
							Favor ingresar fecha de termino.
						  </div>
					  </div>

					  <div class="col-md-6 mb-3">
						<label for="color_original">Color original</label>
						<input type="text" class="form-control" name="color_original" placeholder="Ingresar color original">
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
					  </div>

					  <div class="col-md-6 mb-3">
						<label for="color_aplicar">Color al finalizar</label>
						<input type="text" class="form-control" name="color_aplicar" placeholder="Ingresar color con el que finalizara" >
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
					  </div>

					  <div class="col-md-6 mb-3">
						<label for="numero_cotizacion">Nº Cotización</label>
						<input type="text" class="form-control" name="numero_cotizacion" placeholder="Ingresar número de cotización si posee" >
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
					  </div>

					  <div class="col-md-6 mb-3">
						<label for="orden_compra">Orden de compra</label>
						<input type="text" class="form-control" name="orden_compra" placeholder="Ingresar orden de compra si posee" >
						<div class="valid-feedback">
						  <!--Ingreso correcto! -->
						</div>
					  </div>

					  <div class="col-md-12 mb-6">
						<label for="descripcion">Descripción</label>
						<input type="text" class="form-control" name="descripcion" placeholder="Ingresar descripcion de la orden de trabajo" required>
						<div class="invalid-feedback">
						  Favor ingresar descripción breve.
						</div>
					  </div>

				</div>
				<button class="btn btn-primary" type="submit">
					<i class="far fa-save px-2"></i>
					Ingresar
				</button>
		</form>
		  
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