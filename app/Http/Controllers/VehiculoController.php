<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculoFormRequest;
use App\Servicio;
use App\ServicioVehiculo;
use App\User;
use App\Vehiculo;
use App\TipoVehiculo;
use App\TipoMotor;
use App\MarcaVehiculo;
use App\ModeloVehiculo;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index()
    {
        return view('vehiculo.index', [

            'vehiculo'  => Vehiculo::all(),

        ]);
    }

    public function store(VehiculoFormRequest $request)
    {

        Vehiculo::create($request->validated());
        return redirect()->back()->with('status', 'el vehiculo fue creato exitosamente!');

    }
    public function create()
    {


        return view('vehiculo.create', [

            'cliente'       => User::where('tipo_usuario_id','4')->get(),
            't_vehiculo'    => TipoVehiculo::all(),
            't_motor'       => TipoMotor::all(),
            'ma_vehiculo'   => MarcaVehiculo::all(),

        ]);
    }

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculo.show', [
            'vehiculo'  => $vehiculo,
        ]);
    }

    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
    }

    public function destroy(Vehiculo $vehiculo)
    {
        //
    }


    public function byMarca($id)
    {
        return  ModeloVehiculo::where('marca_vehiculo_id', $id)->get();
    }

}
