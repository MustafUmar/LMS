<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['memberid','account_name','account_number'];

    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
