
@extends('layouts.dashboard_cliente')


@section('title','Servicios')
<!--------------------------------->
@section('content_header')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 col-sm-6 text-center">
            <h1 class="m-0 text-dark">Servicios</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
<!--------------------------------->
@section('content')
<section class="col-lg-12 mx-auto">

 <div class="col-12 mt-3 table-responsive">
  <h2 class="h4 text-dark">Pendientes</h2>
  <table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
   <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
     <th class="w-25" scope="col">Vehículo</th>
     <th class="w-25" scope="col">Tipo Servicio</th>
     <th class="w-25" scope="col">Taller</th>
     <th scope="col">Acción</th>
    </tr>
   </thead>
   <tbody>
   @forelse($servicio_pendiente as $pendiente)
    <tr>
     <th scope="row">{{ $pendiente->id }}</th>
     <td>{{ $pendiente->vehiculo->patente}}</td>
     <td>{{ $pendiente->tipo_servicio->descripcion }}</td>
     <td>{{ $pendiente->taller->descripcion }}</td>
     <td>
      <a class="btn btn-info btn-sm d-flex" href="{{ route('cliente.servicio_cliente', $pendiente) }}" title="">
       <i class="fa fa-eye px-2 my-auto" aria-hidden="true"></i>
       Ver
      </a>
     </td>
    </tr>
    @empty
    <tr>
      <td colspan="5">No existen registros</td>
    </tr>
		@endforelse
   </tbody>
  </table>
 </div>
  
 <div class="col-12 mt-3 table-responsive">
  <h2 class="h4 text-dark">Ejecución</h2>
  <table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
   <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
     <th class="w-25" scope="col">Vehículo</th>
     <th class="w-25" scope="col">Tipo Servicio</th>
     <th class="w-25" scope="col">Taller</th>
     <th scope="col">Acción</th>
    </tr>
   </thead>
   <tbody>
   @forelse($servicio_activo as $activo)
    <tr>
     <th scope="row">{{ $activo->id }}</th>
     <td>{{ $activo->vehiculo->patente}}</td>
     <td>{{ $activo->tipo_servicio->descripcion }}</td>
     <td>{{ $activo->taller->descripcion }}</td>
     <td>
      <a class="btn btn-warning btn-sm d-flex" href="{{ route('cliente.servicio_cliente', $activo) }}" title="">
       <i class="fa fa-eye px-2 my-auto" aria-hidden="true"></i>
       Ver
      </a>
     </td>
    </tr>
    @empty
    <tr>
      <td colspan="5">No existen registros</td>
    </tr>
		@endforelse
   </tbody>
  </table>
 </div>
  

 <div class="col-12 mt-3 table-responsive">
  <h2 class="h4 text-dark">Finalizados</h2>
  <table class="table table-hover bg-light shadow-sm table-sm table-responsive-sm text-center">
   <thead class="thead-dark">
    <tr>

      <!-- supervisor -->
     <th scope="col">termino</th>
     <th class="w-25" scope="col">Vehículo</th>
     <th class="w-25" scope="col">Tipo Servicio</th>
     <th class="w-25" scope="col">Taller</th>
     <th scope="col">Acción</th>
    </tr>

      <!-- Cliente
      -  fehca termino 
      - observaciòn
      -->
   </thead>
   <tbody>
   @forelse($servicio_finalizado as $finalizado)
    <tr>
     <th scope="row">{{ $finalizado->id }}</th>
     <td>{{ $finalizado->vehiculo->patente}}</td>
     <td>{{ $finalizado->tipo_servicio->descripcion }}</td>
     <td>{{ $finalizado->taller->descripcion }}</td>
     <td>
      <a class="btn btn-secondary btn-sm d-flex" href="{{ route('cliente.servicio_cliente', $finalizado) }}" title="">
       <i class="fa fa-eye px-2 my-auto" aria-hidden="true"></i>
       Ver
      </a>
     </td>
    </tr>
    @empty
    <tr>
      <td colspan="5">No existen registros</td>
    </tr>
		@endforelse
   </tbody>
  </table>
 </div>

</section>

<!---------------------------------------------------------------->
@endsection
