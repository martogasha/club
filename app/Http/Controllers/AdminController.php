<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Sell;
use App\Models\Stock;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $sales = Sales::orderByDesc('id')->get();
        return view('admin.index',[
            'sales'=>$sales
        ]);
    }
    public function sell(){
        $stocks = Stock::orderByDesc('id')->get();
        $sells = Sell::orderByDesc('id')->get();
        return view('admin.sell',[
            'stocks'=>$stocks,
            'sells'=>$sells
        ]);
    }
    public function stock(){
        $products = Stock::orderByDesc('id')->get();
        return view('admin.stock',[
            'products'=>$products
        ]);
    }
    public function addProduct(){
        return view('admin.addProduct');
    }
    public function uSell(Request $request){
        $output = "";
        $sell = Sell::find($request->id);
        $output = '
          <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$sell->product_name.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="field-wrapper">
                        <input type="hidden" value="'.$sell->id.'" name="sellId">
                            <input type="text" class="form-control" value="'.$sell->selling_price.'" name="amount">
                            <div class="field-placeholder">Amount</div>
                        </div>
                    </div>
        ';
        return response($output);
    }
    public function burgain(Request $request){
        $getSell = Sell::find($request->sellId);
        $quantity = $getSell->quantity;
        $amount = $request->amount;
        $total = $amount*$quantity;
        $updatePrice = Sell::where('id', $request->sellId)->update(['selling_price'=>$request->amount]);
        $updateTotal = Sell::where('id', $request->sellId)->update(['total'=>$total]);
        return redirect()->back()->with('success','AMOUNT EDITED');
    }
}
