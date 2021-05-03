<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Actividad;
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
        ]);
    }






    
}
