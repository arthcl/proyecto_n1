<?php

namespace App\Http\Controllers;

use App\CategoriaActividad;
use App\Http\Requests\CategoriaActividadFormRequest;
use Illuminate\Http\Request;

class CategoriaActividadController extends Controller
{
    public function index()
    {

    }

    public function store(CategoriaActividadFormRequest $request)
    {

        CategoriaActividad::create($request->validated());

        return redirect()->back()->with('status', 'la categoria fue creada con exito');
    }
    
    
}
