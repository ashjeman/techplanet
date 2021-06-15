<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'cat_img'
    ];


    public function item(){
        return $this -> hasMany(Item::class);
    }
}
