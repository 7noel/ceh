<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = ['nombre', 'tipo', 'phone', 'congregacion', 'hlc', 'email_jw', 'email', 'is_new', 'ceh_id', 'ceh2_id'];
    public function hospitals()
    {
        return $this->belongsToMany('App\Hospital');
    }
}
