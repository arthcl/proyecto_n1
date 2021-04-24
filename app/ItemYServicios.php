<?php

namespace App;

use App\OrdenTrabajo;
use Illuminate\Database\Eloquent\Model;

class ItemYServicios extends Model
{
        	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
	 protected $table = 'item_y_servicios';

	 public function getRouteKeyName(){
    	return 'item';
    }

	public function actividad()
	{
		return $this->belongsTo(Actividad::class, 'actividad_id');
	}

	public function orden_trabajo()
	{
		return $this->belongsTo(OrdenTrabajo::class, 'orden_trabajo_id');
	}


}
