<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyContribution extends Model
{
    protected $fillable = ['begin_date', 'close_date', 'total_contrib', 'current'];

    
}
