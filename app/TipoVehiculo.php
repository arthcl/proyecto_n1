<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table = 'tipo_vehiculo';
	protected $fillable = ['descripcion'];


	public function vehiculos()
	{
		return $this->hasMany(Vehiculo::class);
	}

}
