<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'storeID',
        'store_name',
        'store_add',
        'store_email',
        'store_phone',
        'store_rating'
    ];

    public function item(){
        return $this -> hasMany(Item::class);
    }

    public function order(){
        return $this -> hasMany(Order::class);
    }
}
