@extends('layouts.dashboard')

<!--------------------------------->
@section('content_header')
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 col-sm-6">
						<h1 class="m-0 text-dark">Dashboard Administrador</h1>
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
								

								<h3>{{ $servicio_pendiente->count() }}</h3>
								<p>Servicios Pendientes </p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="{{ route('servicio.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">

								<h3>{{ $servicio_activo->count() }}</h3>
								<p>Servicios Ejecutando</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="{{ route('servicio.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
							<h3>{{ $servicio_finalizado->count() }}</h3>
								<p>Servicios Finalizados</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="{{ route('servicio.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->
			</div>
		</section>

		<hr>

		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<label for="">Taller</label>
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-secondary">
							<div class="inner">
								<h3>{{ $talleres->count() }}</h3>
								<p>Talleres Registrados</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="{{ route('taller.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-secondary">
							<div class="inner">
								<h3>{{ $supervisores->count() }}</h3>
								<p>Supervisores</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="{{ route('usuario.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-secondary">
							<div class="inner">
								<h3>{{ $mecanicos->count() }}</h3>
								<p>Mecánicos</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="{{ route('usuario.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->
			</div>
		</section>


		<hr>

		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<label for="">Clientes</label>
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-secondary">
							<div class="inner">
								<h3>{{ $clientes->count() }}</h3>
								<p>Clientes Registrados</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="{{ route('usuario.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-secondary">
							<div class="inner">
								<h3>{{ $vehiculos->count() }}</h3>
								<p>Vehículos Registrados</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="{{ route('vehiculo.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->
			</div>
		</section>

@endsection