<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'tracking_no',
        'quantity',
        'total_price',
        'itemID',
        'custID',
        'storeID',
        'courierID'
    ]

    public function store(){
        return $this -> belongsTo(Store::class);
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function item(){
        return $this -> hasMany(Item::class);
    }
}
