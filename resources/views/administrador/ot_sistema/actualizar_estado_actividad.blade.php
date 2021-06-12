<div  class="card">
    <div class="card-header">
        Actualizar actividad
    </div>


    <div class=" card-body">
        <form class="form-inline" action="{{ route('orden_trabajo.update', $orden_trabajo) }}" method="POST" accept-charset="utf-8">
            @method('PATCH')
            @csrf
            <div class="form-group mx-sm-3 mb-2">
                <select placeholder="Seleccione estado de la actividad" class="custom-select form-control text-capitalize" id="" name="estado_orden_trabajo_id">
                    <option value="0">Seleccionar...</option>
                    @foreach ($estado_orden_trabajo as $eot)
                        <option value="{{$eot->id}}">
                            {{$eot->descripcion}}
                        </option>
                    @endforeach  								
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        </form>
    </div>
    <div class="card-footer text-center text-capitalize ">
        <small class="text-muted">{{ $orden_trabajo->estado_orden_trabajo->descripcion }}</small>
    </div>
</div>