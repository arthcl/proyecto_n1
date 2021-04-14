<?php

namespace   App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class   EstadoServicioComposer
{
    public function compose (View $view)
    {
        // $servicio_pendiente =  Auth::user()->servicios->where('estado_servicio_id', 1);
        // $servicio_activo = Auth::user()->servicios->where('estado_servicio_id', 2);
        // $servicio_finalizado =Auth::user()->servicios->where('estado_servicio_id', 3);

        // $view->with('servicio_pendiente', $servicio_pendiente);
        // $view->with('servicio_activo', $servicio_activo);
        // $view->with('servicio_finalizado', $servicio_finalizado);
    }
}