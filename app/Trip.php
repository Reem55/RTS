<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'country', 'accommodations', 'checkin', 'checkout', 'transport', 'nop', 'other'
    ];
}
