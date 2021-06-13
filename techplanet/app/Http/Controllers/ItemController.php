<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $item = Item::all();
        return view('layout.item', compact('item'));
    }


}
