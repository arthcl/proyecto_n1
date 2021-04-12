<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{

    use Notifiable;


    public function getRouteKeyName(){
        return 'nombre';
    }

    protected $guarded = [];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class); //tiene muchos "vehiculos"
    }
    public function genero() //generos() + _id = generos_id
    {
        return $this->belongsTo(Genero::class);// pertenece a un "genero"
    }

    public function comuna()
    {
        return $this->HasOne(Comuna::class); //tiene una "comuna"
    }

    public function tipo_cliente()
    {
        return $this->belongsTo(TipoCliente::class); //pertenece a un "tipocliente"
    }

    public function talleres()
    {
        return $this->belongsToMany(Taller::class, 'taller_id')->withTimestamps(); //tiene y pertenece a muchos "talleres"
    }




    
}
