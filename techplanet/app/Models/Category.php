<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryID',
        'category_name'
    ];

    //relations//
    public function item(){
        return $this -> hasMany(Item::class);
    }
    //endRelations//

}
