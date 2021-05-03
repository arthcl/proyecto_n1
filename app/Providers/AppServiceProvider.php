<?php

namespace App\Providers;

use App\OrdenTrabajo;
use App\Servicio;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){

            if(Auth::check()){

                //$servicio = $servicio;
                $servicio_pendiente = Auth::user()->servicios->where('estado_servicio_id', 1)->all();
                $servicio_activo = Auth::user()->servicios->where('estado_servicio_id', 2)->all();
                $servicio_finalizado = Auth::user()->servicios->where('estado_servicio_id', 3)->all();
    
                //$view->with('servicio', $servicio);
                $view->with('servicio_pendiente', $servicio_pendiente);
                $view->with('servicio_activo', $servicio_activo);
                $view->with('servicio_finalizado', $servicio_finalizado);

            }


        });
            
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'

        ]);
    }
}
