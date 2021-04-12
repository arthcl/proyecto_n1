<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use App\Taller;
use App\Vehiculo;
use App\Servicio;


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::get();
        return view('administrador.index', [

   		 		'usuarios' => $usuarios,
   		 		'talleres' =>	Taller::all(),
   		 		'supervisores'	=> User::where('tipo_usuario_id', 2)->get(),
   		 		'mecanicos'	=> User::where('tipo_usuario_id', 3)->get(),
   		 		'clientes'	=> User::where('tipo_usuario_id', 4)->get(),
   		 		'vehiculos'	=> Vehiculo::all(),


				'servicio_pendiente' => Servicio::where('estado_servicio_id', 1)->get(),
				'servicio_activo' => Servicio::where('estado_servicio_id', 2)->get(),
				'servicio_finalizado' => Servicio::where('estado_servicio_id', 3)->get(),

            
        ]);
    }

}
