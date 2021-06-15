<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
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
