<?php

namespace App;

use App\ItemYServicios;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    
	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
	 protected $table = 'orden_trabajo';

	 public function getRouteKeyName(){
    	return 'descripcion_ot';
    }

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'servicio_id');
	}

	public function actividad()
	{
		return $this->hasMany(Actividad::class);
	}

	public function estado_orden_trabajo()
	{
		return $this->belongsTo(EstadoOrdenTrabajo::class);
	}




	
}
