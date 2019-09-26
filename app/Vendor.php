<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable=[ 'name', 'branch', 'website', 'social', 'phone', 'address', 'type', 'about','information'];
}
