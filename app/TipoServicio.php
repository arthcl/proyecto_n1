<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    protected $guarded = [];
    protected $table = 'tipo_servicio';


    public function talleres()
    {
    	return $this->belongsToMany(Taller::class, 'tipo_servicio_taller', 'tipo_servicio_id', 'taller_id');
    }
    
}
