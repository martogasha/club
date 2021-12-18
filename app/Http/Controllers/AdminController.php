<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Order;
use App\Models\Sales;
use App\Models\Sell;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $sales = Order::orderByDesc('id')->get();
        return view('admin.index',[
            'sales'=>$sales
        ]);
    }
    public function expense(){
        $expenses = Expense::orderByDesc('id')->get();
        return view('admin.expense',[
            'expenses'=>$expenses
        ]);
    }
    public function addExpense(){
        return view('admin.addExpense');
    }
    public function storeExpense(Request $request){
        $store = Expense::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'payment_method'=>$request->paymentMethod,
        ]);
        return redirect(url('expense'))->with('success','EXPENSE ADDED SUCCESS');
    }
    public function expenseEdit($id){
        $expense = Expense::find($id);
        return view('admin.editExpense',[
            'expense'=>$expense
        ]);

    }
    public function eExpense(Request $request){
        $edit = Expense::find($request->expenseId);
        $edit->name = $request->name;
        $edit->desc = $request->desc;
        $edit->amount = $request->amount;
        $edit->date = $request->date;
        $edit->payment_method = $request->paymentMethod;
        $edit->save();
        return redirect(url('expense'))->with('success','EXPENSE EDITED SUCCESS');
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
    public function deleteExpense(Request $request){
        $output = "";
        $stockId = Expense::find($request->id);
        $output = '
            <input type="hidden" value="'.$stockId->id.'" name="expenseId">
            <div class="modal-title h4">ARE YOU SURE</div> <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>

        ';
        return response($output);
    }
    public function dExpense(Request $request){
        $delete = Expense::find($request->expenseId);
        $delete->delete();
        return redirect()->back()->with('success','EXPENSE DELETED SUCCESS');
    }
    public function viewSale(Request $request){
        $output = "";
        $sales = Sales::where('order_id',$request->id)->orderByDesc('id')->get();
        foreach ($sales as $sale) {
            $output .= '
                                        <tr class="order">

                                            <td class="order-number" data-title="Order">
                                                <a href="*">'.$sale->product_name.'</a>
                                            </td>

                                            <td class="order-date" data-title="Date">
                                                <time datetime="2014-06-12" title="1402562157">'.$sale->quantity.'</time>
                                            </td>

                                            <td class="order-status" data-title="Status">
                                                '.$sale->selling_price.'
                                            </td>

                                            <td class="order-total" data-title="Total">
                                                <span class="amount">'.$sale->total.'</span>
                                            </td>
                                        </tr>


        ';
        }
        return response($output);
    }
    public function viewSaleHeader(Request $request){
        $output = "";
        $sales = Order::find($request->id);
            $output .= '
               <h5 class="modal-title" id="exampleModalLabel">order #'.$sales->id.' <b style="font-size: 20px">'.$sales->phone.'</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            ';

        return response($output);
    }
}
