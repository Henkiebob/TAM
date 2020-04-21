<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['status', 'in_office', 'available', 'location', 'live_url'];
}
