@extends('layouts.dashboard')
@section('title','PANEL -' . $usuario->nombre)
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark ">{{ $usuario->nombre }}</h1>
						<hr>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')
<!-- <section class="col-lg-6 text-center mb-3 "> -->
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 mx-auto mb-5">
				<div class="row">
					<!---RUT -->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Rut
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->rut }}
							</label>	
						</div>
					</div>

					<!---Paterno -->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Paterno
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->a_paterno }}
							</label>	
						</div>
					</div>

					<!---Materno -->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Materno
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->a_materno }}
							</label>	
						</div>
					</div>

					<!---Genero -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Género
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->genero->descripcion ?? '--' }}
							</label>	
						</div>
					</div>
					
					<!-- FECHA NACIMIENTO-->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Nacido el
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ date('d-m-Y', strtotime($usuario->f_nacimiento)) }}
							</label>
						</div>
					</div>

					<!---CORREO -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Correo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->email ?? '--' }}
							</label>	
						</div>
					</div>
					<!---Comuna -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Comuna
								</span>
							</div>
							<label class="font-weight-normal form-control" id="t_asociado">
								{{ $usuario->comuna->descripcion ?? '--' }}
							</label>	
						</div>
					</div>

					<!---DIRECCION -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Dirección
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->direccion ?? '--' }}
							</label>	
						</div>
					</div>

					<!---NUMERACION -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Numeración
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->numeracion ?? '--' }}
							</label>	
						</div>
					</div>

					<!---telefono  -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									telefono fijo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->telefono_1 ?? '--' }}
							</label>	
						</div>
					</div>
					<!---telefono celular -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Celular
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $usuario->telefono_2 ?? '--' }}
							</label>	
						</div>
					</div>

				</div>
				<div>
					<p class="text-black-50 p-3">
						{{  $usuario->created_at->diffForHumans() ?? '-'  }}
					</p>
				</div>
					<div class="d-flex justify-content-center align-items-center">
						<a class="btn btn-outline-primary" 
							href="{{ route('usuario.index') }}" 
							title="">
							<i class="fas fa-undo"></i>
						</a>

						<a class="btn btn-primary" 
							href="{{ route('usuario.edit', $usuario) }}" 
							title="">
							<i class="fas fa-edit"></i>
						</a>
		
					</div>
					
			</div>
		</div>




	</div>
		

	</div>
</section>

<!-------------- PANEL  VEHICULOS 
<section class="col-lg-12 text-center connectedSortable mx-auto mb-5">
<div class="container">
	<div class="card">
		<div class="card-header">
			<ul class="nav nav-pills" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ingresar Vehiculo</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sus Vehiculos</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
				</li>
			</ul>
		</div>
	
		<div class="card-body">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active  " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				</div>
				<div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					Contact
				</div>
			</div>
		</div>

	</div>
</div>
	
--------------------------------->
<!-- </section> -->

@endsection