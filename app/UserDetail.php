<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'userdetails';

    protected $fillable = [
    	'gender','maritalstatus','dob','pob','stateoforigin','phaddress','profession','companyname','companyaddress',
    	'kinfullname','kinphonenum','kinaddress'
	];

	protected $casts = [
	    'dob'  => 'date:d-M-Y',
	];

	public function user()
	{
		return $this->belongsTo('App/User');
	}
}
