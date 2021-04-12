<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Provincia extends Model
{
	protected $table = 'provincia';
	protected $fillable = ['descripcion', 'region_id'];

	public function comunas(){

		return $this->hasMany(Comuna::class);
	}



}
