<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class Quote extends Controller
{
    public function quotation(){
        $products = Stock::all();
        return view('admin.quotation',[
            'products'=>$products
        ]);
    }
}
