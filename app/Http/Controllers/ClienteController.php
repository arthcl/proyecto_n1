<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\User;
use App\Servicio;
use Illuminate\Support\Facades\Auth;

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
            'servicios' => Auth::user()->servicios

        ]);

    }

    public function servicio()
    {
        return view('cliente.servicio_cliente.index');
    }
    public function servicio_show(Servicio $servicio )
    {

        return view('cliente.servicio_cliente.show', [
            'servicio'  => $servicio->get(),
        ]);
    }

    public function vehiculo()
    {
        return view('cliente.vehiculo_cliente.index');
    }

}
