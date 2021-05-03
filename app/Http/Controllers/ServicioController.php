<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use App\Http\Requests\ServicioFormRequest;
use App\Servicio;
use App\Taller;
use App\TipoServicio;
use App\User;
use App\Vehiculo;
use App\EstadoServicio;
use App\OrdenTrabajo;
use App\Actividad;
use App\ItemYServicios;
use App\Http\Controllers\DB;

use Illuminate\Http\Request;

class ServicioController extends Controller
{

    public function index(Servicio $servicio)
    {
        return view('administrador.servicio.index', [
            'servicio'  => $servicio,
            'servicios_pendiente' => Servicio::where('estado_servicio_id', 1)->get(),
            'servicios_activo' => Servicio::where('estado_servicio_id', 2)->get(),
            'servicios_finalizado' => Servicio::where('estado_servicio_id', 3)->get(),
        ]);
    }

    public function create()
    {

        return view('administrador.servicio.create', [
            'clientes' => User::where('tipo_usuario_id', 3)->get(),
            'tipo_taller'   => TipoServicio::get(),
        ]);
    }


    public function store(ServicioFormRequest $request)
    {   
        Servicio::create($request->validated());
          return redirect()
          ->back()
          ->with('status', 'el servicio fue creado exitosamente!');
    }

 

    public function show(Servicio $servicio)
    {
            
        return view('administrador.servicio.show', [
    		'servicio' => $servicio,
            'orden_trabajo'=> $servicio->orden_trabajo,
            'estadoservicio' => EstadoServicio::all(),


        
            
    	]);

    }

    


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Servicio $servicio)
    {
        $select_cambioestado = $request->input(['estado_servicio_id']);
        if($select_cambioestado == 0){
            return redirect()->route('administrador.servicio.show', $servicio)->with('status-fail', 'se debe ingresar algún estado del servicio');
        }
        $servicio->update([
            'estado_servicio_id' => $request->input('estado_servicio_id')
        ]);
        return redirect()->route('administrador.servicio.show', $servicio)->with('status', 'el servicio fue modificado con exito');
    }


    public function destroy($id)
    {
        //
    }

        public function byCliente($id)
    {

        return  Vehiculo::where('users_id', $id)->get();
    }

    public function byTipoServicio($id)
    {


    return  Taller::join("tipo_servicio_taller", "tipo_servicio_taller.taller_id", "=", "taller.id")
                ->where("tipo_servicio_taller.tipo_servicio_id", $id)
                ->select("taller.id","taller.descripcion")
                ->get();


    }

}
