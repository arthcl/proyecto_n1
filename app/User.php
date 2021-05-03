<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

    use Notifiable;
    //use HasRoles;


    public function getRouteKeyName(){
        return 'nombre';
    }

    protected $guarded = [];
    // para guardar en distinto formato en la base de datos
    //protected $dateFormat = 'd/m/y';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'users_id', 'id'); //tiene muchos "vehiculos"
    }
    public function genero() //generos() + _id = generos_id
    {
        return $this->belongsTo(Genero::class);// pertenece a un "genero"
    }

    public function comuna()
    {
        return $this->belongsTo(Comuna::class); //pertenece a una "comuna"
    }

    public function tipo_cliente()
    {
        return $this->belongsTo(TipoCliente::class); //pertenece a un "tipocliente"
    }

    public function tipo_usuario()
    {
        return $this->belongsTo(TipoUsuario::class); //pertenece a un "tipousuario"
    }

    public function isAdmin()
    {
        return $this->tipo_usuario()->where('descripcion', 'administrador'); //Autorizaciòn si es administrador
    }

    public function isSupervisor()
    {
        return $this->tipo_usuario()->where('descripcion', 'supervisor'); //Autorizaciòn si es supervisor
    }

    public function isCliente()
    {
        return $this->tipo_usuario()->where('descripcion', 'cliente'); //Autorizaciòn si es cliente
    }

    public function talleres()
    {
        return $this->belongsToMany(Taller::class, 'taller_id')->withTimestamps(); //tiene y pertenece a muchos "talleres"
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'users_id', 'id');
    }



}
