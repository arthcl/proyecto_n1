<div class="mt-3">
    <h4 class=" mb-3">
      <span class="text-muted">Actividad</span>
      <span class="badge bg-secondary rounded-pill">{{ $servicio->orden_trabajo->count()}}</span>
    </h4>
    <ul class="list-group mb-3">
        @forelse ($servicio->orden_trabajo as $item_ot)
            <li class="list-group-item list-group-item-primary">
                <div class="">
                <h6 class="my-0">{{$item_ot->descripcion_ot}}</h6>
                    @foreach ($item_ot->actividad as $item_actividad)
                        <li class="list-group-item d-flex justify-content-between ">
                            <span>{{ $item_actividad->descripcion }}</span>
                            <strong>{{ $item_actividad->item->sum('total')}}</strong>

                              @foreach ($item_actividad->item as $item)
                              <li class="list-group-item text-muted d-flex justify-content-between ">
                                <span>{{$item->item}}</span>
                                <strong>{{$item->total}}</strong>

                              </li>
                              @endforeach
                        </li>                                     
                    @endforeach
                    <li class="list-group-item d-flex justify-content-center ">
                      <span>Total (PCL)</span>
              
                      
                    </li> 
                </div>
                 
            </li>
 
        @empty
            <h6 class="my-0">Sin orden de trabajo registrada</h6>
        @endforelse




    </ul>
  </div>