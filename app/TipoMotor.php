<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMotor extends Model
{
    protected $table = 'tipo_motor';
	protected $fillable = ['descripcion'];


	public function vehiculo()
	{
		return $this->HasOne(Vehiculo::class);
	}
}
