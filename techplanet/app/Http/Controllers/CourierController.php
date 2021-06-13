<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;

class CourierController extends Controller
{
    function getData(){
        return Courier::all();
    }
}
