<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_brand',
        'item_model',
        'item_chipset',
        'item_price',
        'item_available_unit',
        'item_rating',
        'item_warranty',
        'item_desc',
        'storeID',
        'categoryID'
    ];


    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function order(){
        return $this -> belongsToMany(Order::class);
    }

    public function store(){
        return $this -> belongsTo(Store::class);
    }
}
