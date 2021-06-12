<?php

namespace App;

use App\Http\Requests\CategoriaActividadFormRequest;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
	 protected $table = 'actividad';

	 /*
	 public function getRouteKeyName(){
    	return 'descripcion';
    }
	*/

	public function orden_trabajo()
	{
		return $this->belongsTo(OrdenTrabajo::class, 'orden_trabajo_id');
	}

	public function categoria_actividad()
	{
		return $this->belongsTo(CategoriaActividad::class);
	}
	public function items()
	{
		return $this->hasMany(ItemYServicios::class, 'actividad_id', 'id');
	}
}
