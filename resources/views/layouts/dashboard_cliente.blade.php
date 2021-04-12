<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

 @include('partials.header')

</head>

<body  class="hold-transition sidebar-mini layout-fixed">
<div id="app" class="wrapper">
	<!-- ///////////////////////////////////  CONTENIDO DE LA CABECERA PANEL - INICIO   ///////////////////// -->


	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
		<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
		<a href="{{ route('home') }}" class="nav-link">Inicio</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
		<a href="{{ route('cliente.index') }}" class="nav-link ">Panel cliente</a>		
		</li>
	</ul>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
		<!-- SEARCH FORM -->
		<!-- Right navbar links -->
	 
		<ul class="navbar-nav ml-auto">
							 
				<li class="nav-item">
					<button class="btn btn-primary {{setActive('logout')}}" 
					href="#" 
					onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						<i class="fas fa-sign-out-alt px-1"></i>
						@lang('Logout')
					</button>
				</li>
		</ul>
	
	</nav>
	<!-- ///////////////////////  CONTENIDO DEL SIDEBAR PRINCIPAL   ///////////////////// -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-light-primary elevation-3">
		<!-- Brand Logo -->
		<a href="{{ route('home') }}" class="brand-link">
			<img src="{{asset('dist/img/emg.jpg')}}" alt="EMG Logo" class="brand-image img-circle elevation-2"
					 style="opacity: .8; width: 300; height: 300">
			<span class="brand-text font-weight-light">{{ config('app.name') }}</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					@if(auth()->user()->genero_id != 2 )
						<img
							style="width: 160; height: 160"
							src="{{asset('dist/img/male_avatar.svg')}}" 
							class="img-circle elevation-2" 
							alt="User Image">
						
					@else
						<img
						style="width: 160; height: 160"
						src="{{asset('dist/img/female_avatar.svg')}}" 
						class="img-circle elevation-2" 
						alt="User Image">
						
					@endif
				</div>
				<div class="info">
						@auth
							{{ auth()->user()->nombre }}
						@endauth 
				</div>
			</div>

		 <!-- Sidebar Menu -->
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				
			@php			
			// SE OBTIENE EL PATH ACTUAL
			$path_completo = Request::path();
			// SE SEPARA SI TIENE / , Y SE COMPARA CON EL INDICE 0 DEL ARRAY
			$path_actual = explode( '/', $path_completo );
			@endphp
			
			<!-- CLIENTE -->
			<li class="nav-item">
				<!-- <a href="pages/widgets.html" class="nav-link"> -->
				<a href="{{route('cliente.index')}}" class="nav-link <?=($path_actual[0] == 'cliente')?"active":"";?> ">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<!-- <i class="right fas fa-angle-left"></i> -->
					<p>Dashboard</p>
				</a>
			</li>
			</li>
			<li class="nav-item has-treeview menu-close">
				<!-- <a href="pages/widgets.html" class="nav-link"> -->
				<a href="{{route('servicio_cliente.index')}}" class="nav-link <?=($path_actual[0] == 'servicio_cliente')?"active":"";?> ">
					<i class="nav-icon fas fa-cogs"></i>
					<!-- <i class="right fas fa-angle-left"></i> -->
					<p>Servicios</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ route('servicio_cliente.index') }}" class="nav-link <?=($path_actual[0] == 'servicio_ciente')?"active":"";?> ">
						<i class="far fa-circle nav-icon"></i>
						<p>Listado</p>
						</a>
					</li>
				</ul>							
			</li>

			<li class="nav-item has-treeview menu-close">
				<!-- <a href="pages/widgets.html" class="nav-link"> -->
				<a href="{{route('vehiculo_cliente.index')}}" class="nav-link <?=($path_actual[0] == 'vehiculo_cliente')?"active":"";?>">
					<i class="nav-icon fas fa-car-side"></i>
					<!-- <i class="right fas fa-angle-left"></i> -->
					<p>Vehículos</p>
					<i class="right fas fa-angle-left"></i>

				</a>

			</li>
		</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
	</aside>

	<!-- ///////////////////////////////////  CONTENIDO INTERNO   /////////////////////////////// -->

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- CONTENIDO DE LA CABECERA -->
		@yield('content_header')

		<!-- CONTENIDO PRINCIPAL -->
		<section class="content">
			<div class="container-fluid">
				<!-- SE INCLUYE EL COMPONENTE DE INDICADORES  -->
				@yield('content_boxes')
				<!-------------------------------------------------------------- -->
				<!-- Main row -->
				<div class="row ml-auto">
					<!-- Left col -->
					@yield('content')
				</div>
			</div><!-- /.container-fluid -->
		</section>
	</div>

<!-- SE INCLUYE EL CONTENIDO DEL FOOTER PRINCIPAL EN EL DASHBOARD -->
	<footer class="main-footer text-center">
		@include('partials.footer')
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<script src="{{ asset('build/toastr.js') }}"></script>


@include('partials.session-status')
</body>
</html>
