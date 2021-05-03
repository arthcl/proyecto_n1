<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{


	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
	 protected $table = 'servicio';

    public function getRouteKeyName(){
    	return 'observacion';
    }

   public function vehiculo()
   {
   	return $this->belongsTo(Vehiculo::class);
   } 

   public function user()
   {
      return $this->belongsTo(User::class, 'users_id', 'id');
   }

   public function taller()
   {
      return $this->belongsTo(Taller::class, "taller_id");
   }

   public function tipo_servicio()
   {
      return $this->belongsTo(TipoServicio::class, "tipo_servicio_id");
   }

   public function orden_trabajo()
   {
       return $this->hasMany(OrdenTrabajo::class);
   }

   public function estado_servicio()
   {
      return $this->belongsTo(EstadoServicio::class);
   }
}
