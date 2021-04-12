@extends('layouts.dashboard')
@section('title','PANEL -' . $taller->descripcion)
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark ">{{ $taller->descripcion }}</h1>
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
								{{ $taller->rut }}
							</label>	
						</div>
					</div>

					<!---RAZON SOCIAL -->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Razón social
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $taller->razon_social }}
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
								{{ $taller->direccion }}
							</label>	
						</div>
					</div>

					<!---COMUNA -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Comuna
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $taller->comuna->descripcion }}
							</label>	
						</div>
					</div>
					
					<!-- TELEFONO FIJO-->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									 Telefono fijo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $taller->telefono_1 }}
							</label>
						</div>
					</div>

					<!---telefono celular -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Telefono celular
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
							{{ $taller->telefono_2 }}
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
							<label class="font-weight-normal form-control" id="t_asociado">
								{{ $taller->email }}
							</label>	
						</div>
					</div>

					<!---REPRESENTANTE -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Representante 
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $taller->representante }}
							</label>	
						</div>
					</div>

					<!---FECHA DE CONTRATO -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Fecha de contrato
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
							{{ $taller->fecha_contrato }}
							</label>	
						</div>
					</div>

					<!---CALIFICACIÒN  -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									 Calificación
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $taller->calificacion }}
							</label>	
						</div>
					</div>
					<!---FECHA DE CREACIÓN -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Fecha de creación
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
							{{  $taller->created_at->diffForHumans() ?? '-'  }}
							</label>	
						</div>
					</div>

				</div>
				
			</div>
		</div>
	</div>
		
		<div>
			<p class="text-black-50 p-3">
				..
			</p>
		</div>
			<div class="d-flex justify-content-center align-items-center">
				<a class="btn btn-outline-primary" 
					href="{{ route('taller.index') }}" 
					title="">
					<i class="fas fa-undo"></i>
				</a>

						<a 
							class="btn btn-primary btn-group-sm"
							href="{{ route('usuario.edit', $taller) }}" 
							title="">
							<i class="fas fa-user-edit"></i>
						</a>
						<a 
							class="btn btn-danger"
							href="#"
							onclick="document.getElementById('delete-usuario').submit()" 
							title="">
							<i class="fas fa-trash"></i>   
						</a>
					<form 
						class="d-none" 
						id="delete-usuario" 
						action="{{ route('usuario.destroy', $taller) }}" 
						method="POST" 
						accept-charset="utf-8">
						@csrf
						@method('DELETE')
					</form>
			</div>
	</div>
</section>






@endsection