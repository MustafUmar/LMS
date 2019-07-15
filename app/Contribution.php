<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $fillable = ['account_name'];

    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function account()
    {
    	return $this->belongsTo('App\Account','account_id');
    }
}
