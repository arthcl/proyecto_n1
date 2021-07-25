<?php

namespace App\Http\Controllers;

use App\MarcaVehiculo;
use App\ModeloVehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\ModeloFromRequest;

class ModeloController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('administrador.marca_modelo.modelo.create', [
            'marcas' => MarcaVehiculo::select('descripcion', 'id')->get(),
        ]);
    }


    public function store(ModeloFromRequest $request)
    {
         ModeloVehiculo::create($request->validated());

         return redirect()->back()->with('status', 'el modelo fue creado con exito');
    }
}
