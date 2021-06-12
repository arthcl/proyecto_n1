<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    /*
    public function getRouteKeyName(){
        return 'descripcion';
    }
*/
    protected $table = 'taller';
    // protected $fillable = ['descripcion'];
	protected $guarded = [];



    public function comuna()
    {
    	return $this->belongsTo(Comuna::class);
    }
   public function tiposervicios()
    {
       return $this->belongsToMany(Servicio::class, 'tipo_servicio_taller', 'taller_id', 'tipo_servicio_id');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'servicio_id');
    }
}


