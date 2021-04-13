<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => true] );

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');
Route::post('/contacto', 'MessageController@store')->name('messages.store');



Route::middleware(['auth', 'check.admin'])->group(function(){
	//servicios
	Route::resource('servicio', 'ServiceController')->names('service');
	//fluidos
	Route::resource('fluido', 'FluidoController')->names('fluido');	
	//usuarios
	Route::resource('usuario', 'UserController')->names('usuario');
	//administrador
	Route::resource('administrador', 'AdministradorController')->names('administrador');
	//Vehiculos
	Route::resource('vehiculo', 'VehiculoController')->names('vehiculo');
	//Talleres
	Route::resource('taller', 'TallerController')->names('taller');
	//servicios
	Route::resource('servicio', 'ServicioController')->names('servicio');
	//ordenes de trabajo
	Route::resource('orden_trabajo', 'OrdenTrabajoController')->names('orden_trabajo');
	//actividades
	Route::resource('actividad', 'ActividadController')->names('actividad');
});
	


Route::middleware(['auth', 'check.cliente'])->group(function(){
	//Cliente
	Route::resource('cliente', 'ClienteController')->names('cliente');
	Route::get('servicio_cliente','ServicioClienteController@index')->name('servicio_cliente.index');
	Route::get('vehiculo_cliente','VehiculoClienteController@index')->name('vehiculo_cliente.index');
});


Route::middleware(['auth', 'check.supervisor'])->group(function(){
	//supervisor
	Route::resource('supervisor', 'SupervisorController')->names('supervisor');
});



/*
//Route::get('/servicio', 'ServiceController@index')->name('service.index');
//Route::get('/servicio/crear', 'ServiceController@create' )->name('service.create');
//Route::get('/servicio/{servicio}/editar', 'ServiceController@edit' )->name('service.edit');
//Route::patch('/servicio/{servicio}', 'ServiceController@update' )->name('service.update');
//Route::post('/servicio', 'ServiceController@store')->name('service.store');
//Route::get('/servicio/{servicio}', 'ServiceController@show')->name('service.show');
//Route::delete('/servicio/{servicio}', 'ServiceController@destroy')->name('service.destroy');
*/


