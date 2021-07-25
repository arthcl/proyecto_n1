@extends('layouts.dashboard_cliente')


@section('title','Dashboard Cliente')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 col-sm-6">
			  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<label for="">Servicios</label>
				<div class="row">
					<div class="col-lg-4 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>{{ count($servicio_pendiente)}}</h3>
								<p>Servicios Pendientes</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="servicio_cliente" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3>{{count($servicio_activo)}}</h3>
								<p>Servicios Ejecutando</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="servicio_cliente" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-4 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>{{count($servicio_finalizado)}}</h3>
								<p>Servicios Finalizados</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="servicio_cliente" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
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
			<div class="col-12 col-lg-6">
				
				@include('errors.formErrors')
				@include('partials.session-status')
				<form class="card py-3 px-4" method="POST" action="{{ route('register') }}">
				@csrf
				<p class="text-center">
					<strong>Datos personales</strong>
				</p>
				<div class="form-group row">
					<label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
					<div class="col-sm-8">
					  <input type="text" readonly class="form-control-plaintext" id="" value="{{ Auth::user()->nombre }} {{ Auth::user()->a_paterno }} {{ Auth::user()->a_materno }}">
					</div>
				</div>

				<div class="form-group row">
					<label for="fecha_registro" class="col-sm-4 col-form-label">Fecha de registro</label>
					<div class="col-sm-8">
					  <input type="text" readonly class="form-control-plaintext" id="" value="{{  date('d-m-Y', strtotime(Auth::user()->created_at)) }}">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="direccion" class="col-sm-4 col-form-label">Dirección</label>
					<div class="col-sm-8">
					  <input type="text" readonly class="form-control-plaintext" id="" value="{{ Auth::user()->direccion }}">
					</div>
				</div>

				<div class="form-group row">
					<label for="telefono" class="col-sm-4 col-form-label">Telefono de contacto</label>
					<div class="col-sm-8">
					  <input type="text" readonly class="form-control-plaintext" id="" value="{{ Auth::user()->telefono_1 }}">
					</div>
				</div>
    
			
				</form>
			
			</div>

<!--------------------------------------PROGRESO DE SERVICIOS------------------------------- -->
			<div class="card col-12 col-lg-6 mb-5">
				<p class="text-center mt-3">
				  <strong>Progreso de servicios</strong>
				</p>

				@forelse ($servicios as $item)
					<div class="progress-group">
						<span class="progress-text">{{$item->observacion}} / {{ $item->vehiculo->patente }}</span>
						<span class="progress-number"><b>{{ count($item->orden_trabajo->where('estado_orden_trabajo_id', 2) ) }}</b>/{{ $item->orden_trabajo->count() }}</span>
						@php
							$total_ot = $item->orden_trabajo->count();
							$ot_realizadas = count($item->orden_trabajo->where('estado_orden_trabajo_id', 2));
							$porcentaje = 0;
							if($ot_realizadas > 0)
							{
							$porcentaje = ($ot_realizadas*100)/$total_ot;
							}
							$porcentaje = round($porcentaje, 2);
						@endphp
						<div class="progress sm">
							<div class="progress-bar progress-bar-striped progress-bar-animated @if($porcentaje == 100) bg-success @else bg-info @endif" role="progressbar" aria-valuenow="{{$porcentaje}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentaje}}%">
								@if($porcentaje == 100)
									Servicio completado 
								@else {{ $porcentaje }}% 
								@endif
							</div>
						</div>
				  	</div>					
				@empty
					
				@endforelse
			</div>

		</div>
	</div>
</section>


@endsection