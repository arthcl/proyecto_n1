<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;

use App\Region;
use App\Provincia;
use App\Comuna;

use App\User;
use App\TipoCliente;
use App\Genero;
use App\TipoUsuario;

use App\TipoMotor;
use App\TipoVehiculo;
use App\Vehiculo;

use App\Http\Controllers\Hash;

use App\Taller;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()

    {

        //where, whereIn, whereBetween.

        $cliente = User::where('tipo_usuario_id', 3)->paginate(5);

        $roles = User::whereIntegerInRaw('tipo_usuario_id', [1,2,3])->paginate(5);

    	return view('usuario.index', [
            'cliente'   => $cliente,
            'roles'     => $roles,
        
           
        ] );
    }
    public function create()
    {
        
        return view('usuario.create', [

            't_asociado'    => Taller::all(),
            'tipo_usuario'  =>  TipoUsuario::all(),
            'tipo_cliente' => TipoCliente::all(),
            'genero' => Genero::all(),
            'cliente' => TipoCliente::all(),
            'region'    => Region::all(),
            'provincia' => Provincia::all(),
            'comuna'    => Comuna::where('provincia_id', 'id')->get(),
        ]);
    }



    public function show(User $usuario){


    	return view('usuario.show', [
    		'usuario' => $usuario,
            
    	]);
    
    }

    public function edit(User $usuario)
    {
        
    	return view('usuario.edit', [
    		'usuario' => $usuario
    	]);
    }

          public function update(User $usuario, UserFormRequest $request)
    {

         $usuario->update($request->all());

        return redirect()->route('usuario.show', $usuario)->with('status', 'el usuario fue modificado con exito');
    }


        public function destroy(User $usuario)
    {
        //$usuario->vehiculos()->delete();
        //$usuario->delete();
       
        

        return redirect()->route('usuario.index')->with('status', 'el usuario fue eliminado con exito.');
    } 

       // funcion generadora de password
    public function generarPassword()
    {
        $randompass = Str::random(8);
        $hash_pass = Hash::make($randompass);

        return $hash_pass;
    }


     // función dropdown region -> provincia 

    public function byRegion($id)
    {
       return Provincia::where('region_id', $id)->get();
    }
    public function byProvincia($id)
    {
        return  Comuna::where('provincia_id', $id)->get();
    }

    //----------------------------------------

}
