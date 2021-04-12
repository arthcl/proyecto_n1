

@include('errors.formErrors')

<div class="card">

	<div class="card-header">
		<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Formulario</span>
		</h4>
	</div>
	<div class="card-body">
		<form class="" method="POST" action="{{ route('orden_trabajo.store') }}">
			@csrf
			<input type="hidden" name="servicio_id"  value="{{ $servicio->id }}">
			<input type="hidden" name="vigencia"  value="1">
				<div class="form-row mb-5">

					<div class="form-group col-md-6">
						<label class="form-label text-muted" for="inputFechaInicio">Fecha de Inicio (*)</label>
						<input type="date" class="form-control" name="fecha_inicio" id="inputFechaInicio" placeholder="Fecha de inicio">
					</div>

					<div class="form-group col-md-6">
						<label class="form-label text-muted" for="inputFechaTermino">Fecha de termino (*)</label>
						<input type="date" class="form-control" name="fecha_termino" id="inputFechaTermino" placeholder="Fecha de ingreso">
					</div>
					
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputFechaIngreso">Fecha de ingreso (*)</label>
					<input type="date" class="form-control" name="fecha_ingreso" id="inputFechaIngreso" placeholder="Fecha de ingreso">
					</div>
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputKilometrajeActual">Kilometraje Actual (*)</label>
					<input type="number" class="form-control" name="km_actual" id="inputKilometrajeActual" placeholder="Kilometraje Actual">
					</div>
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputProxMantKM">Próx. Mant. KM (*)</label>
					<input type="number" class="form-control" name="km_proximo" id="inputProxMantKM" placeholder="Próxima Mantención en kilometraje">
					</div>
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputFechaProxMant">Fecha Prox. Mant. (*)</label>
					<input type="date" class="form-control" name="fecha_proxima_mantencion" id="inputFechaProxMant" placeholder="Fecha de la proxima mantención">
					</div>
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputColorOriginal">Color Original: (*)</label>
					<input type="text" class="form-control" name="color_original" id="inputColorOriginal" placeholder="Color Original">
					</div>
					<div class="form-group col-md-6">
					<label class="form-label text-muted" for="inputColorAplicar">Color Aplicar: (*)</label>
					<input type="text" class="form-control" name="color_aplicar" id="inputColorAplicar" placeholder="Color que se aplicara">
					</div>
					<div class="form-group col-md-12">
						<label class="form-label text-muted" for="inputDescripcion">Descripción</label>
						<input type="text" class="form-control" name="descripcion_ot" id="inputDescripcion" placeholder="Descripción de la orden de trabajo">
					</div>
					<div class="form-group col-md-6">
						<label class="form-label text-muted" for="inputDescripcion">Nº Cotización</label>
						<input type="text" class="form-control" name="numero_cotizacion" id="inputNumeroCotizacion" placeholder="Número de cotización">
					</div>
					<div class="form-group col-md-6">
						<label class="form-label text-muted" for="inputOrdenCompra">Orden de compra</label>
						<input type="text" class="form-control" name="orden_compra" id="inputOrdenCompra" placeholder="Orden de compra">
					</div>
			</div>
		
		  <div class="col-12 text-center">
				<button class="btn btn-primary" type="submit">
					<i class="far fa-save px-2"></i>
					Ingresar
				</button>
			</div>
		</form>
	</div>
</div>






