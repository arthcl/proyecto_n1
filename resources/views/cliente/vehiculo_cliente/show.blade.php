@extends('layouts.dashboard_cliente')

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
                  href="{{ url('vehiculo_cliente')}}" 
                  title="">

                  <i class="fas fa-undo"></i>
                  volver
                </a>

              </div>
            
          </div>           
        </div>
      </div>

    </div>  
  </div> 


             
        
@endsection