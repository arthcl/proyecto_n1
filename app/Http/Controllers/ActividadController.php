<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Actividad;
use App\ItemYServicios;

class ActividadController extends Controller
{

    public function index()
    {

    }

    public function store(Request $request)
    {
          $actividad = Actividad::create($request->validate([
               
              'vigencia'          =>  'required',
             'orden_trabajo_id'   =>  'required',
             'descripcion'       =>  'required',

          ]));
          foreach ($request->item as $key=>$item) {
            $data = new ItemYServicios();
            $data->actividad_id = $actividad->id;
            $data->vigencia = $request->vigencia;
            $data->item = $item;
            $data->unidad = $request->unidad[$key];
            $data->cantidad = $request->cantidad[$key];
            $data->valor = $request->valor[$key];
            $data->total = $request->total[$key];
            $data->save();

        }



            
            
      return redirect()->back()->with('status', 'Actividad ingresada correctamente')->with('status', 'Items ingresados correctamente');  

      
    }
}
