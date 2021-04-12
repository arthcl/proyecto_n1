<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioClienteController extends Controller
{
    public function index(Servicio $servicio)
    {
        return view('cliente.servicio_cliente.index', [
            'servicio'  => $servicio,
            'servicio_pendiente' => Auth::user()->servicios->where('estado_servicio_id', 1)->all(),
            'servicio_activo' => Auth::user()->servicios->where('estado_servicio_id', 2)->all(),
            'servicio_finalizado' => Auth::user()->servicios->where('estado_servicio_id', 3)->all(),
        ]);
    }
}
