@extends('layouts.dashboard_cliente')


@section('title','Dashboard Cliente')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 col-sm-6">
            <h1 class="m-0 text-dark">Cliente</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<label for="">Servicios</label>
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>{{ count($servicio_pendiente)}}</h3>
								<p>Servicios Pendientes</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3>{{count($servicio_activo)}}</h3>
								<p>Servicios Ejecutando</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>{{count($servicio_finalizado)}}</h3>
								<p>Servicios Finalizados</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->
			</div>
		</section>

		<hr>

		<section class="content">
    <div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 mb-5">
				<!-- @include('errors.formErrors')
				@include('partials.session-status') -->
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('register') }}">
				
				@csrf

        <!---Cliente -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Cliente
						</span>
					</div>
					<input placeholder="" id="km_actual" type="text" class="form-control" name="km_actual" value="Juan Perez" max="10" autocomplete="km_actual">
				</div>

				<!---Vehiculo -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Vehículo
						</span>
					</div>
					<input placeholder="" id="km_actual" type="text" class="form-control" name="km_actual" value="Mazda 3" max="10" autocomplete="km_actual">
				</div>


				<!---Tipo Servicio -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Servicio
						</span>
					</div>
					<input placeholder="" id="km_actual" type="text" class="form-control" name="km_actual" value="Mecánica" max="10" autocomplete="km_actual">
				</div>

				<!---Taller -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Taller
						</span>
					</div>
					<input placeholder="" id="km_actual" type="text" class="form-control" name="km_actual" value="CARS" max="10" autocomplete="km_actual">
				</div>

				<!---Observacion Servicio -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Observación
						</span>
					</div>
					<textarea class="form-control text-dark" name="observacion_servicio" id="observacion_servicio" cols="30" rows="3" placeholder="Ingrese observación si requiere."></textarea>
				</div>

        <!---Tipo Orden de Trabajo -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Tipo OT (*)
						</span>
					</div>
          <input placeholder="Ingrese kilometraje actual del vehículo" id="km_actual" type="text" class="form-control" name="km_actual" value="Mantención 10.000KM" max="100" autocomplete="km_actual">				
				</div>

				<!---Fecha de Ingreso -->	
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Fecha ingreso (*)
						</span>
					</div>
					<input class="form-control" placeholder="24-10-2020" type="date" name="fecha_ingreso" value="24-10-2020">
				</div>


				<!-- MANTENCION -->
				<br>
				<label for="">Mantención</label>
				<hr>

				<!---KM Actual -->	
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							KM Actual (*)
						</span>
					</div>
					<input placeholder="Ingrese kilometraje actual del vehículo" id="km_actual" type="number" class="form-control" name="km_actual" value="10802" max="10" autocomplete="km_actual">
				</div>


				<!--- PROXIMA MANTENCION KILOMETRAJE -->	
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Próx. Mant. KM (*)
						</span>
					</div>
					<input placeholder="Ingrese próximo kilometraje de mantención" id="km_proximo" type="number" class="form-control" name="km_proximo" value="20000" max="10" autocomplete="km_proximo">
				</div>

				<!--- FECHA PROXIMA MANTENCION KILOMETRAJE -->	
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Fecha Prox. Mant. (*)
						</span>
					</div>
					<input class="form-control" placeholder="Ingrese fecha de próxima mantención" type="date" name="fecha_proxima_mantencion" value="{{old('fecha_proxima_mantencion')}}">
				</div>

		
        <br>
				<label for="">Mantención</label>
        <hr class="mt-3 pt-2">
				

				<!-- Campo NUMERO COTIZACION  -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Número Cotización: (*)
						</span>
					</div>
					<input placeholder="Ingrese número de cotización" id="numero_cotizacion" type="number" class="form-control" name="numero_cotizacion" value="{{ old('numero_cotizacion') }}" max="10" autocomplete="numero_cotizacion">
				</div>


				<!-- Campo oc si existe  -->
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100">
							Orden de Compra: (*)
						</span>
					</div>
					<input placeholder="Ingrese órden de compra" id="orden_compra" type="number" class="form-control" name="orden_compra" value="{{ old('orden_compra') }}" max="10" autocomplete="numero_cotizacion">
				</div>

				
			  </form>	
			</div>
      <div class="col-lg-6 my-auto">
      <img style="transform:rotate(90deg);" src="https://c7.alamy.com/compes/2b3hc48/contorno-vector-coche-aislado-sobre-fondo-blanco-vista-superior-ilustracion-moderna-y-plana-2b3hc48.jpg" class="img-fluid" alt="">
      </div>
		</div>
	</div>
		</section>


@endsection