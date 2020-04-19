<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	protected $fillable = ['nombre', 'prioridad'];

	public function people()
    {
        return $this->belongsToMany('App\Person');
    }

    public function hospitals()
    {
        return $this->hasMany('App\Hospital');
    }
}
