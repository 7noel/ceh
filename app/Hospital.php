<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
	protected $fillable = ['nombre', 'alias', 'tipo', 'clase', 'prioridad'];
    public function peaple()
    {
        return $this->belongsToMany('App\Person');
    }
}
