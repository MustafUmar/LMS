<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'userdetails';

    protected $fillable = [
    	'gender','maritalstatus','dob','pod','state_of_origin','phaddress','profession','companyname','companyaddress',
    	'nokfullname','nokphonennum','nokaddress'
	]

	public function user()
	{
		return $this->belongsTo('App/User');
	}
}
