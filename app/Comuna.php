<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comuna extends Model
{
	protected $table = 'comuna';
    protected $fillable = ['descripcion', 'provincia_id'];

    public function users()
    {
    	return $this->hasMany(User::class);
    }

    public function talleres()
    {
    	return $this->hasMany(Taller::class, 'taller_id')->withTimestamps();
    }

    public function provincia()
    {
    	return $this->belongsTo(Provincia::class);
    }
}
