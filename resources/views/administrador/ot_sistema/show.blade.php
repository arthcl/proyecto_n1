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
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')
<div class="mt-3 col-4">
  <h4 class=" mb-3 d-flex justify-content-between">
    <span class="text-muted">Actividad</span>
    <span class="badge bg-secondary rounded-pill">{{ $orden_trabajo->actividad->count()}}</span>
  </h4>
  <ul class="list-group mb-3">
      @forelse ($orden_trabajo->actividad as $actividad)
          <li class="list-group-item list-group-item-primary">
              <h6 class="my-0">{{$actividad->descripcion}}</h6>
                  @foreach ($actividad->items as $item)
                      <li class="list-group-item d-flex justify-content-between ">
                          <span>{{ $item->item }} </span>
                          <span>{{ $item->cantidad }}</span>
                          <strong>$ {{ number_format( $item->valor*$item->cantidad, 2)}}</strong>
                      </li>                                     
                  @endforeach
                  <li class="list-group-item d-flex justify-content-center ">
                    <span>Total (PCL)</span>  
                  </li>        
          </li>
      @empty
          <h6 class="my-0">Sin orden de trabajo registrada</h6>
      @endforelse
  </ul>
</div>



<!-- FORMULARIO INGRESO DE ITEMS ----------------------->
<div class="mt-3 col-8">
  @include('administrador.ot_sistema.create_actividad')
</div>
@endsection