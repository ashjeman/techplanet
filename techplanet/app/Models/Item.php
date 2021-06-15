<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemID',
        'item_brand',
        'item_model',
        'item_chipset',
        'item_price',
        'item_available_unit',
        'item_rating',
        'item_warranty',
        'storeID',
        'categoryID'
    ];

    //relations//
    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function order(){
        return $this -> belongsToMany(Order::class);
    }

    public function store(){
        return $this -> belongsTo(Store::class);
    }
    //endRelations//

    protected $primaryKey = 'itemid';
}
