<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [ 'name', 'description' ];

    public function admin()
    {
    	return $this->belongsToMany('App\Admin', 'user_role');
    }
}
