<?php

namespace App\Http\Controllers;

use App\Fluido;
use Illuminate\Http\Request;
use App\Http\Requests\FluidoFromRequest;

class FluidoController extends Controller
{
    public function index()
    {
    	    return view('fluidos.index', [
            'fluido' => Fluido::latest()->paginate(6)
        ] );
    }

   public function edit(Fluido $fluido)
    {
        return view('fluidos.edit', [
            'fluido' => $fluido
        ]);
    }

      public function update(Fluido $fluido, FluidoFromRequest $request)
    {

         $fluido->update($request->validated());

        return redirect()->route('fluido.show', $fluido)->with('status', 'el fluido fue modificado con exito');
    }


        public function store(FluidoFromRequest $request)
    {
         Fluido::create($request->validated());

         return redirect()->back()->with('status', 'el fluido fue creado con exito');
    }

        public function show(Fluido $fluido)
    {
        return view('fluidos.show', [
            'fluido' => $fluido
        ]);
    }

    public function destroy(Fluido $fluido)
    {
        $fluido->delete();

        return redirect()->route('fluido.index')->with('status', 'el fluido fue eliminado con exito.');
    }   
}
