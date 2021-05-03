<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{

    public function index()
    {
        return view('supervisor.index');
    }

    public function servicios()
    {
        return view('supervisor.servicio_taller.index');
    }

}
