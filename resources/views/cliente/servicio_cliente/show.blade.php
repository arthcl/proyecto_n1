@extends('layouts.dashboard')
@section('title','Servicio - ' . $servicio)
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark text-capitalize"></h1>
						<hr>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')
<section class="col-lg-12 text-center mb-3 ">
	
		<div class="row">
			<div class="col-lg-6">
					<!---VEHICULO -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100 text-justify">
									Vehículo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ collect($servicio) }}
							</label>	
						</div>

					<!---CLIENTE -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100  text-justify">
									Cliente
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ collect($servicio) }}
							</label>	
						</div>

					<!---TALLER ASIGNADO -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100 text-justify">
									Taller
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ collect($servicio) }}
							</label>	
						</div>
					
					<!-- TIPO DE SERVICIO-->

						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Tipo de servicio
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ collect($servicio) }}
							</label>
						</div>
					<!-- FECHA DE CREACIÓN-->

						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									creación
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
							{{-- $servicio->created_at->diffForHumans() --}}
							</label>
						</div>
			</div>

			

		</div>

		<hr>
</section>

@endsection


