<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdenTrabajoFormRequest;


use App\OrdenTrabajo;
use App\Servicio;



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

    public function show(OrdenTrabajo $ot)
    {
        return view('orden_trabajo.show', [
            'orden_trabajo'    =>  $ot,
        ]);
    }

    
}
