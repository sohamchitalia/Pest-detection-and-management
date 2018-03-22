<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandi extends Model
{
    //
     protected $fillable = [
        'name', 'district', 'phone','address','state',
    ];
}
