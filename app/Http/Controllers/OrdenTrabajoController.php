<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Actividad;
use App\CategoriaActividad;
use App\EstadoOrdenTrabajo;
use App\OrdenTrabajo;


use Illuminate\Http\Request;
use App\Http\Requests\ActividadFormRequest;
use App\Http\Requests\OrdenTrabajoFormRequest;



class OrdenTrabajoController extends Controller
{

    public function index()
    {
        
    }

    public function store(OrdenTrabajoFormRequest $request)
    {
        OrdenTrabajo::create($request->validated());
  
          return redirect()
          ->back()
          ->with('status', 'la orden de trabajo fue creada exitosamente!');
      
    }

    public function show(OrdenTrabajo $orden_trabajo)
    {
        return view('administrador.ot_sistema.show', [
            
            'orden_trabajo' => $orden_trabajo,
            'categoria_actividad' =>  CategoriaActividad::all(),
            'estado_orden_trabajo' => EstadoOrdenTrabajo::all(),

        ]);
    }

    public function update(Request $request, OrdenTrabajo $orden_trabajo)
    {
        $select_cambioestado = $request->input(['estado_orden_trabajo_id']);
        if($select_cambioestado == 0){
            return redirect()->route('orden_trabajo.show', $orden_trabajo)->with('status-fail', 'se debe ingresar algún estado en la orden de trabajo');
        }
        $orden_trabajo->update([
            'estado_orden_trabajo_id' => $request->input('estado_orden_trabajo_id')
        ]);
        return redirect()->route('orden_trabajo.show', $orden_trabajo)->with('status', 'el estado de la orden de trabajo fue modificado con exito');
    }






    
}
