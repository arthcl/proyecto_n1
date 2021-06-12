@extends('layouts.dashboard_cliente')
@section('title','Servicio - ' . $servicio->observacion)
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark text-capitalize">{{$servicio->observacion}}</h1>
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
									Veh&iacuteculo
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
								{{ $servicio->vehiculo->patente }}
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
								{{ $servicio->user->nombre }}
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
								{{ $servicio->taller->descripcion }}
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
								{{ $servicio->tipo_servicio->descripcion }}
							</label>
						</div>
					<!-- FECHA DE CREACIÓN-->

						<div class="input-group mb-3">
							<div class="input-group-prepend w-25">
								<span class="input-group-text w-100">
									fecha de ingreso
								</span>
							</div>
							<label class="font-weight-normal form-control" id="">
							{{$servicio->created_at}}
							</label>
						</div>
			</div>

			

		</div>

		<hr>

<div class="mt-3">
    <h4 class=" mb-3">
      <span class="text-muted">Actividad</span>
      <span class="badge bg-secondary rounded-pill">{{ $servicio->orden_trabajo()->count()}}</span>
    </h4>
    <ul class="list-group mb-3">
        @forelse ($servicio->orden_trabajo as $item_ot)

		@php
		$suma = 0;    
	  	@endphp
            <li class="list-group-item list-group-item-primary">
                <div class="">
                <h6 class="my-0">{{$item_ot->descripcion}}</h6>
                   @foreach ($item_ot->actividad as $item_actividad)
                        <li class="list-group-item d-flex justify-content-between ">
							
								<strong>{{ $item_actividad->categoria_actividad->descripcion}}</strong>
								<strong>$ {{ number_format($item_actividad->items->sum('total'), 2)}}</strong>
              
                              @foreach ($item_actividad->items as $item) 
							  @php
							  $suma+=$item->total;   //se soman los totales de cada ot
							  @endphp 
                              <li class="list-group-item text-muted d-flex justify-content-between ">
                                <span>{{$item->item }} / x{{$item->cantidad}}</span>
								<span>{{$item->total }}</span>

                              </li>
                            @endforeach 
                        </li>                                     
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between ">
                      <strong>Total (PCL)</strong>
					  <strong>$ {{number_format($suma, 2)}}</strong>

                      
                    </li> 
                </div>
                 
            </li>
 
       		@empty
            <h6 class="my-0">Sin orden de trabajo registrada</h6>
        	@endforelse 




    </ul>
  </div>


</section>

@endsection


