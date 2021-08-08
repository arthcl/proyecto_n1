{{--

@extends('layouts.dashboard')

@section('title', $vehiculo->cliente->nombre)

@section('title','VEHICULO')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Detalles del vehiculo</h1>
            @include('errors.formErrors')
            @include('partials.session-status') 
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection


@section('content')
<section class="col-lg-12 text-center mb-3 ">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-header bg-warning">
            <h4>{{ $vehiculo->patente }}</h4>
          </div>
            <div class="table-responsive  border">
              
              <div class="card-body">
                <table class="table col-12">
                  <tbody class="text-left">
                    <tr>
                      <td class="py-0 font-weight-bold">Cliente: {{ $vehiculo->cliente->nombre}} {{$vehiculo->cliente->a_parterno}}</td>

                    
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">Modelo:</span> {{ $vehiculo->modelo_vehiculo->descripcion }}</td>
                    </tr>
                    <tr>
                     <td class="py-0"><span class="font-weight-bold">Indicador KM/hr:</span> Esta se ingresara manualmente </td>
                    </tr>
                    <tr >
                      <td class="py-0"><span class="font-weight-bold mb-0">Revisión Tec : </span> {{ date('d-m-Y', strtotime($vehiculo->revision_tecnica)) }}</td>
                    </tr>
                  
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">horometro:</span> {{ $vehiculo->horometro }}</td>
                    
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">extintor:</span> {{ $vehiculo->extintor }}</td>
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">permiso de circulacion:</span> {{ $vehiculo->permiso_circulacion }}</td>
                      
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">año:</span> {{ $vehiculo->ano_vehiculo }}</td>
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">nomenclatura neumatico:</span> {{ $vehiculo->nomenclatura_neumatico }}</td>
                      
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">tipo de vehiculo:</span> {{ $vehiculo->tipo_vehiculo->descripcion}}</td>
                      
                    </tr>
                    <tr>
                      <td class="py-0"><span class="font-weight-bold">tipo de motor:</span> {{ $vehiculo->tipo_motor->descripcion}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <small class="text-black-50 p-3">
                  Registrado 
                  {{  $vehiculo->created_at->diffForHumans() ?? '-'  }}
                </small>
              </div>


              
              <div class="d-flex justify-content-center align-items-center py-2">
                <a class="btn btn-outline-primary" 
                  href="{{ route('vehiculo.index')}}" 
                  title="">

                  <i class="fas fa-undo"></i>
                  
                </a>
                <a class="btn btn-primary" 
                href="{{ route('vehiculo.edit' , $vehiculo)}}" 
                title="">

                <i class="fas fa-edit"></i>
                
              </a>
              </div>
            
          </div>           
        </div>
      </div>

    </div>  
  </div> 


             
        
@endsection

--}}

@extends('layouts.dashboard')

@section('title', $vehiculo->cliente->nombre)

@section('title','VEHICULO')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark ">{{ $vehiculo->patente }}</h1>
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
									Patente
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->patente }}
							</label>	
						</div>
					</div>

					<!---Paterno -->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Cliente
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->cliente->nombre }} {{$vehiculo->cliente->a_parterno}} {{$vehiculo->cliente->a_materno}}
							</label>	
						</div>
					</div>

					<!--- -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Marca
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->marca_vehiculo->descripcion ?? "--"}}
							</label>	
						</div>
					</div>
					
					<!-- FECHA NACIMIENTO-->
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Modelo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->modelo_vehiculo->descripcion ?? "--" }}
							</label>
						</div>
					</div>

					<!---CORREO -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Revisión Técnica
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ date('d-m-Y', strtotime($vehiculo->revision_tecnica)) }}
							</label>	
						</div>
					</div>
					<!---Comuna -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Horometro/Kilometraje
								</span>
							</div>
							<label class="font-weight-normal form-control" id="t_asociado">
                {{ $vehiculo->horometro }}
							</label>	
						</div>
					</div>

					<!---DIRECCION -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Extintor
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->extintor }}
							</label>	
						</div>
					</div>

					<!---NUMERACION -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Permiso de circulación
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->permiso_circulacion }}
							</label>	
						</div>
					</div>

					<!---telefono  -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
                  Año
                </span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->ano_vehiculo}}
							</label>	
						</div>
					</div>
					<!---telefono celular -->	                	
					<div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Nomenclatura de neumático
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->nomenclatura_neumatico }}
							</label>	
						</div>
					</div>

          <div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Tipo de vehículo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->tipo_vehiculo->descripcion }}
							</label>	
						</div>
					</div>

          <div class="col-lg-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									Tipo de vehículo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $vehiculo->tipo_motor->descripcion }}
							</label>	
						</div>
					</div>

				</div>
				<div>
					<p class="text-black-50 p-3">
						{{  $vehiculo->created_at->diffForHumans() ?? '-'  }}
					</p>
				</div>
					<div class="d-flex justify-content-center align-items-center">
						<a class="btn btn-outline-primary" 
							href="{{ route('vehiculo.index') }}" 
							title="">
							<i class="fas fa-undo"></i>
						</a>

						<a class="btn btn-primary" 
							href="{{ route('vehiculo.edit', $vehiculo) }}" 
							title="">
							<i class="fas fa-edit"></i>
						</a>
		
					</div>
					
			</div>
		</div>




	</div>
		

	</div>
</section>


@endsection