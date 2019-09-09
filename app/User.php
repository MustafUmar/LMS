<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'othername', 'lastname', 'email', 'phone', 'memberid', 'isactive', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->belongsToMany('App\Group', 'group_member');
    }

    public function groupowner()
    {
        return $this->hasMany('App\Group','owner');
    }

    public function account()
    {
        return $this->hasMany('App\Account','user_id');
    }

    // public function contribute()
    // {
    //     return $this->hasMany('App\Contribution','user_id');
    // }

    public function userdetail()
    {
        return $this->hasOne('App\UserDetail');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'user_id');
    }
}
