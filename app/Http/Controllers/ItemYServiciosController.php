<?php

namespace App\Http\Controllers;

use App\ItemYServicios;
use Illuminate\Http\Request;
use App\Http\Requests\ItemServicioFormRequest;

class ItemYServiciosController extends Controller
{
    
public function index()
{
    

}

public function store( Request $request)
{
        $actividad = $request->input('actividad_id');
     
        foreach ($request->item as $key=>$item) {
          $data = new ItemYServicios();
          $data->actividad_id = $actividad;
          $data->vigencia = $request->vigencia;
          $data->item = $item;
          $data->unidad = $request->unidad[$key];
          $data->cantidad = $request->cantidad[$key];
          $data->valor = $request->valor[$key];
          $data->total = $request->total[$key];
          $data->save();
        }
        

        return redirect()->back()->with('status', 'el/los items fueron creados con exito');
}


}
