
@forelse ($orden_trabajo as $ot)

<div class=" order-md-2 mb-4 mt-4">
  <h4 class="d-flex justify-content-between align-items-center mb-3 ">
    <a href=" {{route('orden_trabajo.show', $ot->id)}}"><span class="text-primary">{{ $ot->descripcion }}</span></a>
    <span class="badge badge-secondary badge-pill">{{ $ot->estado_orden_trabajo->descripcion }}</span>
  </h4>
  <ul class="list-group mb-3 ">
    @php
      $suma = 0;    
    @endphp
    @foreach ($ot->actividad as $actividad)
   
    <li class="list-group-item d-flex justify-content-between lh-condensed">
      <div class="">
        <h6 class="my-0">{{$actividad->descripcion}}</h6>
        <ul class="">
          @foreach ($actividad->items as $item)
          @php
          $suma+=$item->total;   //se soman los totales de cada ot
          @endphp 
          <div class="d-flex justify-content-between align-items-center">
            <li class=""><small class="text-muted">{{ $item->item }}</small></li>
            <small>$ {{ number_format($item->valor, 2) }}</small>        
          </div>
          
          @endforeach
        </ul>
      </div>
      <span class="text-muted">$ {{ number_format($actividad->items->sum('total'), 2) }}</span>
    </li>        
    @endforeach

    <li class="list-group-item d-flex justify-content-between">
      <span>Total (CLP)</span>
      <strong>$ {{number_format($suma, 2)}}</strong>
    </li>
  </ul>
</div>
@empty
<h4 class="d-flex justify-content-center align-items-center mb-3">
  <span class="text-muted">Orden de trabajo sin registrar</span>
</h4>
@endforelse
