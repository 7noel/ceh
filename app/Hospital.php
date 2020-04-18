<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
	protected $fillable = ['nombre', 'alias', 'tipo', 'clase', 'prioridad', 'group_id'];

	public function scopeName($query, $name){
		if (trim($name) != "") {
			$query->where('nombre', 'LIKE', "%$name%");
		}
	}
	public function people()
	{
		return $this->belongsToMany('App\Person');
	}
	public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
