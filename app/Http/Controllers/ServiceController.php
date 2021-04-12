<?php

namespace App\Http\Controllers;


use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests\ServicioFromRequest;

class ServiceController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    { 
        return view('servicios.index', [
            'servicio' => Servicio::latest()->paginate(5)
        ] );
    }

    public function create()
    {
        return view('servicios.create', [
            'servicio' => new Servicio

        ]);
    }
    public function store(ServicioFromRequest $request)
    {
         Servicio::create($request->validated());
          /* para datos especificos
          [
          'title' => request('title'),
            'url' => request ('url'),
            'description' => request ('description')
            ]
        */
         return redirect()->route('service.index')->with('status', 'el servicio fue creado con exito');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', [
            'servicio' => $servicio
        ]);
    }

    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', [
            'servicio' => $servicio
        ]);
    }

    public function update(Servicio $servicio, ServicioFromRequest $request)
    {

         $servicio->update($request->validated());

        return redirect()->route('service.show', $servicio)->with('status', 'el servicio fue modificado con exito');
    }
   


    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('service.index')->with('status', 'el servicio fue eliminado con exito.');
    }
}
