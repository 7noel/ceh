<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = ['nombre', 'tipo', 'phone', 'congregacion', 'hlc', 'email_jw', 'email', 'is_new', 'ceh_id', 'ceh2_id', 'group_id'];

	public function scopeName($query, $name){
		if (trim($name) != "") {
			$query->where('full_name', 'LIKE', "%$name%");
		}
	}

    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital');
    }
    
	public function groups()
    {
        return $this->belongsToMany('App\Group');
    }
}
