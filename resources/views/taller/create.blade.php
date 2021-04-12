@extends('layouts.dashboard')


@section('title','TALLER')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-lg-12 text-center col-sm-6">
			<h1 class="m-0 text-dark ">Crear nuevo taller</h1>
			<hr>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
@endsection
<!--------------------------------->


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto mb-5">
				@include('errors.formErrors')
				@include('partials.session-status')
					<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('taller.store') }}">
						@csrf
						<input type="hidden" name="vigencia" value="1">

<!---TIPO TALLER -->
<div class="input-group mb-3">
	<div class="input-group-prepend w-25">
		<span class="input-group-text w-100">
			Tipo Taller
		</span>
	</div>
	@foreach ($t_taller as $tt)
	<div class="form-check ml-4 ">
		<input type="checkbox" name="tipotaller[]" value="{{ $tt->id }}" class="form-check-input">
		<label class="form-check-label">{{ $tt->descripcion }}</label>
	</div>
	@endforeach
</div>

						<hr class="my-4 text-dark">

						<!---RUT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Rut
								</span>
							</div>
							<input placeholder="Ingrese RUT" id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" autocomplete="rut" autofocus>
						</div>

						<!---NOMBRES -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Nombre
								</span>
							</div>
							<input placeholder="Ingrese nombres" id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" autocomplete="descripcion">
						</div>

						<!--- RAZON SOCIAL -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Razón Social
								</span>
							</div>
							<input placeholder="Ingrese nombres" id="razon_social" type="text" class="form-control" name="razon_social" value="{{ old('razon_social') }}" autocomplete="razon_social">
						</div>


						<!---DIRECCIÓN -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Dirección
								</span>
							</div>
							<input placeholder="Ingrese dirección" class="form-control" id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" autocomplete="direccion">
						</div>

						<!--- Region -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
			         			<label class="input-group-text w-100" for="select_region">
			         				Region
			         			</label>
		         			</div>
		                		<select
		                		class="custom-select"
		                		id="select_region"
		                		name="select_region">
									<option value="">Seleccionar...</option>
									@foreach ($region as $itemRegion)
										<option value="{{$itemRegion->id }}">{{$itemRegion->descripcion}}</option>
									@endforeach
									</select>

		                </div>

						<!---Provincia -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
			                	<label
			                		for="select_provincia"
			                		class="input-group-text w-100"> {{ __('Provincia')}}
			                	</label>
		                	</div>
	                			<select
		                		class="custom-select"
		                		id="select_provincia"
		                		name="select_provincia">
									<option selected>Seleccionar...</option>
								</select>
		                </div>

						<!---Comuna -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
			                	<label
			                		for="select_comuna"
			                		class="input-group-text w-100"> {{ __('Comuna')}}
			                	</label>
		                	</div>
	                			<select
		                		class="custom-select"
		                		id="select_comuna"
		                		name="comuna_id">

									<option selected>Seleccionar...</option>

								</select>
		                </div>

						<!---TELEFONO PARTICULAR -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Celular
								</span>
							</div>
							<input placeholder="Ingrese celular" class="form-control" id="telefono_1" type="tel" name="telefono_1" value="{{ old('telefono_1') }}" autocomplete="telefono_1">
						</div>

						<!---TELEFONO FIJO -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Teléfono fijo
								</span>
							</div>
							<input placeholder="Ingrese teléfono fijo" class="form-control" id="telefono_2" type="tel" name="telefono_2" value="{{ old('telefono_2') }}" autocomplete="tel">
						</div>

						<!---EMAIL -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Correo
								</span>
							</div>
							<input placeholder="Ingrese correo electrónico" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email">
						</div>

						<!---contacto -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Representante
								</span>
							</div>
							<input placeholder="Ingrese nombre del representante" id="representante" type="text" class="form-control" name="representante" value="{{ old('representante') }}"  autocomplete="representante">
						</div>


						<!---Fecha contrato -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Fecha contrato
								</span>
							</div>
							<!-- <input placeholder="Ingrese correo electrónico" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email"> -->
							<input class="form-control" placeholder="Ingrese fecha de contrato" type="date" name="fecha_contrato" value="{{old('fecha_contrato')}}">
						</div>


						<!---Fecha contrato -->
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Calificación
								</span>
							</div>
							<select class="custom-select" id="calificacion" name="calificacion">
							<option value="1">1/5</option>
							<option value="2">2/5</option>
							<option value="3">3/5</option>
							<option value="4">4/5</option>
							<option value="5">5/5</option>
								<?php /*
								@foreach ($comuna as $itemComuna)
									<option value="{{ old('comuna', $itemComuna->id) }}">{{$itemComuna->descripcion}}</option>
								@endforeach */ ?>
							</select>
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
	<!-- Regiones, provincias, comunas dropdown -->
  <script src="{{ asset('js/usuario/region_provincia_comuna.js') }}" defer></script>
@endsection


