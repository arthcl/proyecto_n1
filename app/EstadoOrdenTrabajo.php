<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOrdenTrabajo extends Model
{
	protected $table = 'estado_orden_trabajo';
    protected $fillable = ['descripcion'];


}
