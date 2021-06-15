<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    function index(){
        $data = Item::all();
        return view('layouts.item', ['item'=>$data]);
    }

    function getData($id){
        $details =  Item::find($id);
        return view('layouts.item', ['item'=>$details]);
    }


}
