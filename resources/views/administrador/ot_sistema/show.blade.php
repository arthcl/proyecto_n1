@extends('layouts.dashboard')
@section('title','Servicio - ' . $orden_trabajo->descripcion )
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark text-capitalize">{{ $orden_trabajo->descripcion }}</h1>
						<hr>
            <h2 class="text-left text-dark text-capitalize">gestion de Actividades</h2>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')
<div class="mt-3 col-4">
  <h4 class=" mb-3 d-flex justify-content-between">
    <span class="text-muted">Actividades</span>
    <span class="badge bg-secondary rounded-pill">{{ $orden_trabajo->actividad->count()}}</span>
  </h4>
  <ul class="list-group mb-3">
    @php
        $suma = 0;
    @endphp
      @forelse ($orden_trabajo->actividad->sortBy('categoria_actividad_id') as $actividad)
          <li class="list-group-item list-group-item-primary">
              <h6 class="my-0">{{$actividad->categoria_actividad->descripcion}}</h6>
                  @foreach ($actividad->items as $item)
                      <li class="list-group-item d-flex justify-content-between ">
                          <span>{{ $item->item }} </span>
                          <span>x{{ $item->cantidad }}</span>
                          <strong>$ {{ number_format( $item->valor*$item->cantidad, 2)}}</strong>
                      </li>
                      
                      @php
                          $suma+=  $item->valor*$item->cantidad;
                      @endphp
                  @endforeach
                        
          </li>
          
      @empty
          <h6 class="my-0">Sin orden de trabajo registrada</h6>
      @endforelse
      <li class="list-group-item d-flex justify-content-between bg-gray ">
        <span>Total (PCL) </span>  
        <strong>{{ number_format($suma,2) }}</strong>
      </li>  
  </ul>
</div>



<!-- FORMULARIO INGRESO DE ITEMS ----------------------->
<div class="mt-3 col-8">
  @include('administrador.ot_sistema.actualizar_estado_actividad')
  
  @include('administrador.ot_sistema.create_actividad')
</div>
@endsection