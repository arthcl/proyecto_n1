@extends('layouts.dashboard')


@section('title','USUARIO')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Crear nuevo usuario</h1>
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

		            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('register') }}">
		                @csrf
            			<input type="hidden" name="vigencia" value="1">

						<!---TIPO USUARIO -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
		                		<span class="input-group-text w-100">
		                			Tipo usuario
		                		</span>
		                	</div>
							<select placeholder="Seleccione tipo usuario" class="form-control" id="t_usuario" name="t_usuario">
								<option value="0">Seleccionar...</option>
								@foreach ($tipo_usuario as $tu)
									<option value="{{$tu->id}}">
										{{$tu->descripcion}}
									</option>
								@endforeach  								
							</select>		
		                </div>
						<hr class="my-4 text-dark">
						
						<!---TIPO CLIENTE -->
					<div id="tipo_cliente" type="">

		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
		                		<span class="input-group-text w-100">
		                			Tipo cliente
		                		</span>
		                	</div>
							<select placeholder="Seleccione tipo cliente"  class="form-control" id="t_cliente" name="t_cliente">
								<option value="0">Seleccionar...</option>
								@foreach ($tipo_cliente as $tc)
									<option value="{{$tc->id}}">
										{{$tc->descripcion}}
									</option>
								@endforeach 
							</select>		
		                </div>
					</div>

						<!---TALLER ASOCIADO -->
					<div id="taller_asociado">

		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
		                		<span class="input-group-text w-100">
		                			Taller asociado
		                		</span>
		                	</div>
							<select class="form-control" id="t_asociado" name="t_asociado">
								<option value="0">Seleccionar...</option>
								@foreach ($t_asociado as $ta)
									<option value="{{$ta->id}}">
										{{$ta->descripcion}}
									</option>
								@endforeach
							</select>		
		                </div>
					</div>

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
										Nombres
									</span>
								</div>
								<input placeholder="Ingrese nombres" id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" autocomplete="nombre"> 
							</div>

						<hr class="my-4 text-dark">
						
						<!-- TIPO CLIENTE PARTICULAR -->
						<div id="cliente_particular">
							
							
							<!---APELLIDO PATERNO -->
							<div class="input-group mb-3">
								<div class="input-group-prepend w-25">
									<span class="input-group-text w-100">
										Apellido Paterno 
									</span>
								</div>
								<input placeholder="Ingrese apellido paterno" class="form-control" id="a_paterno" type="text" name="a_paterno" value="{{ old('a_paterno') }}" autocomplete="a_paterno">	
							</div>

							<!---APELLIDO MATERNO -->
							<div class="input-group mb-3">
								<div class="input-group-prepend w-25">
									<span class="input-group-text w-100">
										Apellido Materno 
									</span>
								</div>
								<input placeholder="Ingrese apellido materno" class="form-control" id="a_materno" type="text" name="a_materno" value="{{ old('a_materno') }}" autocomplete="a_materno">	
							</div>
							

							<!---GENERO -->	                	
							<div class="input-group mb-3">
								<div class="input-group-prepend w-25">
									<span class="input-group-text w-100">
										Género
									</span>
								</div>
								<select placeholder="Seleccione género" class="form-control" id="genero" name="genero">
									<option value="{{ old('genero') }}">Seleccionar...</option>
									@foreach ($genero as $g)
										<option value="{{$g->id}}">{{$g->descripcion}}</option>
									@endforeach
								</select>		
							</div>
			
							<!-- FECHA NACIMIENTO-->
							<div class="input-group mb-3">
								<div class="input-group-prepend w-25">
									<span class="input-group-text w-100">
										Fecha de nacimiento
									</span>
								</div>
								<input class="form-control" placeholder="fecha de nacimiento" type="date" name="f_nacimiento" value="{{old('f_nacimiento')}}">
							</div>

							<hr class="my-4 text-dark">

						</div>

						

						<!-- TIPO CLIENTE EMPRESA -->
						<div id="cliente_empresa">

							<!---NOMBRES -->
							<div class="input-group mb-3">
								<div class="input-group-prepend w-25">
									<span class="input-group-text w-100">
										Razón Social
									</span>
								</div>
								<input placeholder="Ingrese razón social" id="razon_social" type="text" class="form-control" name="razon_social" value="{{ old('razon_social') }}" autocomplete="razon_social"> 
							</div>

								 
							<hr class="my-4 text-dark">

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
						
						<!---NUMERO DIRECCION -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
		                		<span class="input-group-text w-100">
		                			Nº
		                		</span>
		                	</div>
							<input placeholder="Ingrese número dirección" class="form-control" id="numeracion" type="number" name="numeracion" value="{{ old('numeracion') }}" autocomplete="numeracion">
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
										<option value="{{ old('region', $itemRegion->id) }}">{{$itemRegion->descripcion}}</option>
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
		                		name="select_comuna">
									
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
		                	<input placeholder="Ingrese celular" class="form-control" id="telefono_1" type="tel" name="telefono 1" value="{{ old('telefono_1') }}" autocomplete="telefono_1">
		                </div>
						
						<!---TELEFONO FIJO -->
		                <div class="input-group mb-3">
		                	<div class="input-group-prepend w-25">
		                		<span class="input-group-text w-100">
		                			Teléfono fijo
		                		</span>
		                	</div>
							<input placeholder="Ingrese teléfono fijo" class="form-control" id="telefono_2" type="tel" name="telefono_2" value="{{ old('telefono_2') }}" autocomplete="telefono_2">
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
						
						<!---PASSWORD -->	
		                <div class="input-group mb-3">
							<div class="input-group-prepend w-25">
						    	<button class="btn btn-primary w-100" type="button" id="btnGenerarPass">
									Generar Contraseña
								</button>
						  	</div>
						  	<input placeholder="Haga click en el botón Generar Contraseña " value="{{old('password') }}" id="password" name="password" type="text" class="form-control h-auto">
						</div>
						
						<!---BOTONES DE OPCIONES -->			                
						<div class="input-group d-flex justify-content-center">
							<!-- <a class="btn btn-outline-secondary" href="{{ route('usuario.index') }}" title="">
								Volver
							</a> -->
							<button class="btn btn-primary btn-lg col-lg-4 offset-lg-4 ml-4 my-3" type="submit">
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

  	<!-- Generar password random -->
  	<script src="{{ asset('js/password-generator.min.js') }}" ></script>
  	<script src="{{ asset('js/especificos.js')}}"></script>
  	<script src="{{ asset('js/usuario/crear_tipo_usuario.js') }}" ></script>

@endsection



