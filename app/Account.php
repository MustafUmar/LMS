<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['memberid','bankname','accountname','accountnumber','balance'];

    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function contribute()
    {
    	return $this->hasMany('App\Contribution', 'account_id');
    }
}
