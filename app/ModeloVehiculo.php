<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    protected $table = 'modelo_vehiculo';
    protected $fillable = ['descripcion', 'marca_vehiculo_id'];




}
