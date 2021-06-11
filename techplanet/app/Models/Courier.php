<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'courierID',
        'courier_name',
        'courier_phone'
    ];

    //aku taktau nak letak hasMany atau belongsTo
}
