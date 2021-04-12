<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['region', 'abreviatura', 'capital'];

    protected $table  = 'region';
}
