<?php

namespace App\Http\Controllers;

use App\Comuna;
use App\Http\Requests\TallerFormRequest;
use App\Provincia;
use App\Region;
use App\Taller;
use App\TipoServicio;
use Illuminate\Http\Request;

class TallerController extends Controller
{

    public function index()
    {
        $taller = Taller::all()->where('vigencia', 1);


       return view('taller.index', [

            'taller' => $taller,



          /*  return  Taller::join("tipo_servicio_taller", "tipo_servicio_taller.taller_id", "=", "taller.id")
            ->where("tipo_servicio_taller.tipo_servicio_id", $id)
            ->select("taller.id","taller.descripcion")
            ->get();
*/

       ]);
    }

    public function create()
    {
         $t_taller = TipoServicio::get();
         return view('taller.create', [

            't_taller'  =>  $t_taller,
            'region'    => Region::all(),
            'provincia' => Provincia::all(),
            'comuna'    => Comuna::where('provincia_id', 'id')->get(),
         ]);
    }

    public function store(Request $request)
        {
    
        if ($request->has('tipotaller'))
        {
            $taller = Taller::create($request->validate([
                
                'vigencia'          =>  'required',
                'rut'               =>  'required',
                'descripcion'       =>  'required',
                'razon_social'      =>  'required',
                'direccion'         =>  'required',
                'comuna_id'         =>  'required',
                'telefono_2'        =>  'required',
                'telefono_1'        =>  'required',
                'email'             =>  'required',
                'representante'     =>  'required',
                'fecha_contrato'    =>  'required',
                'calificacion'      =>  'required',
    
            ]));

            $checkbox = $request->input(['tipotaller']);

            foreach ($checkbox as $cb)
            {
            $taller->tiposervicios()->attach($cb);
            
            }
            return redirect()->back()->with('status', 'El taller fue creado con exito!'); 
        }
        else
        {
           return redirect()->back()->with('status-fail', 'ingrese al menos un tipo de taller');  
        }

    }

    public function show(Taller $taller)
    {
        return view('taller.show', [
            'taller' => $taller,
        ]);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

        public function byRegion($id)
    {
       return Provincia::where('region_id', $id)->get();
    }
    public function byProvincia($id)
    {
        return  Comuna::where('provincia_id', $id)->get();
    }
}
