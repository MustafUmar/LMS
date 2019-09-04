<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'amount'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function contribute()
    {
    	return $this->belongsTo('App\Contribution', 'ctracc_id');
    }
}
