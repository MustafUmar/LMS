<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description', 'public_private'];

    public function users()
    {
    	return $this->belongsToMany('App\User', 'group_member');
    }

    public function ownedby()
    {
        return $this->belongsTo('App\User','owner');
    }
}
