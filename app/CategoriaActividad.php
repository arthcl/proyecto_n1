<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaActividad extends Model
{
        	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
	 protected $table = 'categoria_actividad';

     
/*

	public function orden_trabajo()
	{
		return $this->belongsTo(OrdenTrabajo::class, 'orden_trabajo_id');
	}

	public function items()
	{
		return $this->hasMany(ItemYServicios::class, 'actividad_id', 'id');
	}
*/
}
