<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
	protected $table = 'tipo_cliente';
	protected $fillable = ['descripcion'];



    public function users()
    {
    	return $this->hasMany(User::class);
    }

}
