<?php

namespace App\Http\Controllers;

use App\MarcaVehiculo;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaFromRequest;

class MarcaController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('administrador.marca_modelo.marca.create');
    }

    public function store(MarcaFromRequest $request)
    {
         MarcaVehiculo::create($request->validated());

         return redirect()->back()->with('status', 'la marca fue creada con exito');
    }
}
