<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fluido extends Model
{
	//protected $fillable = ['title', 'url', 'description'];
	 protected $guarded = [];//realiza lo contrario que fillable, se mencionan los campos que no se requiere asignar masivamente
    public function getRouteKeyName(){
    	return 'descripcion';
    }

}
