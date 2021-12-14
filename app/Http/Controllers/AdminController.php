<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Sell;
use App\Models\Stock;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $sales = Sales::all();
        return view('admin.index',[
            'sales'=>$sales
        ]);
    }
    public function sell(){
        $stocks = Stock::all();
        $sells = Sell::all();
        return view('admin.sell',[
            'stocks'=>$stocks,
            'sells'=>$sells
        ]);
    }
    public function stock(){
        $products = Stock::all();
        return view('admin.stock',[
            'products'=>$products
        ]);
    }
    public function addProduct(){
        return view('admin.addProduct');
    }
}
