<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Malahierba\ChileRut\ChileRut;
use Malahierba\ChileRut\Rules\ValidChileanRut;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)

    {

        
        return Validator::make($data, [
            't_usuario'         => ['required', 'numeric'],
            't_cliente'         => ['required_if:t_usuario, 3 | numeric | digits:1 | nullable'],
            't_asociado'        => ['required_if:t_usuario, 2| digits:1 | nullable'],
            'rut'               => ['required',' string', 'max:11', new ValidChileanRut(new ChileRut)],
            'nombre'            => ['required', 'string', 'max:50'],
            'a_paterno'         => ['required_if:t_cliente, 2 | string|max:50|nullable'],
            'a_materno'         => ['required_if:t_cliente, 2 | string|max:50|nullable'],
            'genero'            => ['required_if:t_usuario, 3 | required_if:t_cliente, 2 |numeric|digits:1|nullable'], 
            'giro_rubro'        => ['string', 'max:200'],
            'razon_social'      => ['required_if:t_cliente, 1 | string | max:200 | nullable'],
            'direccion'         => ['string', 'max:100'],
            'numeracion'        => ['string', 'max:10'],            
            'telefono celular'  => ['numeric', 'digits:6'],
            'telefono fijo'     => ['numeric', 'digits:6'],
            'email'             => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password'          => ['required','string'],
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        User::create([
            'vigencia'          =>  $data['vigencia'],
            'tipo_usuario_id'   =>  $data['t_usuario'],
            'tipo_cliente_id'   =>  $data['t_cliente'],
            'taller_id'        =>  $data['t_asociado'],
            'rut'               =>  $data['rut'],
            'nombre'            =>  $data['nombre'],
            'a_paterno'         =>  $data['a_paterno'],
            'a_materno'         =>  $data['a_materno'],
            'genero_id'         =>  $data['genero'],
            'razon_social'      => $data['razon_social'],
            'f_nacimiento'      =>  $data['f_nacimiento'],
            'direccion'         =>  $data['direccion'],
            'numeracion'        =>  $data['numeracion'],
            'telefono_1'        =>  $data['telefono_1'],
            'telefono_2'        =>  $data['telefono_2'],
            'email'             =>  $data['email'],
            'password'          =>  Hash::make($data['password']),           
            'comuna_id'         =>  $data['select_comuna'],
        ]);

        return redirect()->back()->with('status', 'el usuario fue creato exitosamente!');
        
    }


        public function redirectPath()
    {
            return '/usuario';

    }
}
