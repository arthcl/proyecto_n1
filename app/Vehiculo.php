<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //tabla vehiculo
    protected $table = 'vehiculo';

    protected $guarded = [];

    // para guardar en distinto formato en la base de datos
    //protected $dateFormat = 'd/m/y';

/*
    public function getRouteKeyName(){
    	return 'patente';
    }
    */


    public function cliente()
    {
    	return $this->belongsTo(User::class, "users_id");
    }

    public function tipo_vehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class );
    }

    public function marca_vehiculo()
    {
        return $this->belongsTo(MarcaVehiculo::class);
    }
    public function modelo_vehiculo()
    {
        return $this->belongsTo(ModeloVehiculo::class);
    }

    public function tipo_motor()
    {
        return $this->belongsTo(TipoMotor::class);
    }

    public function servicios()
    {
        return $this->belongsTo(Servicio::class);
    }


}
