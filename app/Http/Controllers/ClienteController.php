<?php

namespace App\Http\Controllers;

use App\User;
use App\Servicio;

use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('cliente.index', [
            'usuario' =>  Auth::user(),
            'servicios' => Auth::user()->servicios->all(),

        ]);

    }

    public function servicio()
    {
        return view('cliente.servicio_cliente.index');
    }
    public function servicio_show(Servicio $servicio )
    {
        return view('cliente.servicio_cliente.show', [
            'servicio'  => $servicio,
        ]);
    }

    public function vehiculo()
    {
        return view('cliente.vehiculo_cliente.index', [
            'vehiculo'  => Auth::user()->vehiculos->all(),
        ]);
    }

    public function vehiculo_show(Vehiculo $vehiculo )
    {
        return view('cliente.vehiculo_cliente.show', [
            'vehiculo'  => $vehiculo,
        ]);
    }

}
