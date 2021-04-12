<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//USUARIO
Route::get('/region/{id}/provincia','UserController@byRegion');
Route::get('/provincia/{id}/comuna','UserController@byProvincia');

//TALLER
Route::get('/region/{id}/provincia','TallerController@byRegion');
Route::get('/provincia/{id}/comuna','TallerController@byProvincia');

//VEHICULO
Route::get('/marca/{id}/modelo','VehiculoController@byMarca');


//SERVICIO
Route::get('/cliente/{id}/vehiculo','ServicioController@byCliente');

//TIPOSERVICIO

Route::get('/tipo_servicio/{id}/taller','ServicioController@byTipoServicio');



