<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;


 //   protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
      $rol = Auth::user()->tipo_usuario->descripcion;  

      switch($rol)
      {

        case 'administrador':
            return '/administrador';
            break;
        case 'supervisor':
            return '/supervisor';
            break;
        case 'cliente':
            return '/cliente';
            break;

        default:
        return '/';
        break;
      }
    }
}
