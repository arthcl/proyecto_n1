<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\ItemYServicios;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ActividadFormRequest;

class ActividadController extends Controller
{

    public function index()
    {

    }
    
    public function store(ActividadFormRequest $request)
    {
        Actividad::create($request->validated());

        return redirect()
        ->back()
        ->with('status', 'el/los items fueron creados exitosamente!');
    }
    
}
