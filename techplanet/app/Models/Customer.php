<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'custID',
        'cust_fname',
        'cust_lname',
        'cust_add',
        'cust_email',
        'cust_phone'
    ];

    public function order(){
        return $this -> hasMany(Order::class);
    }
}
