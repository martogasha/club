<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Hotelexpense;
use App\Models\HotelOrder;
use App\Models\Hotelstock;
use App\Models\Order;
use App\Models\Sales;
use App\Models\salesHotel;
use App\Models\Sell;
use App\Models\sellHotel;
use App\Models\Stock;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $sales = Order::orderByDesc('id')->get();
        return view('admin.index',[
            'sales'=>$sales
        ]);
    }
    public function hotelAdmin(){
        $sales = HotelOrder::orderByDesc('id')->get();
        return view('admin.indexHotel',[
            'sales'=>$sales
        ]);
    }
    public function HardwareDashboard(){
        $sales = Order::orderByDesc('id')->get();
        $products = Stock::all();
        return view('admin.indexHardware',[
            'sales'=>$sales,
            'products'=>$products
        ]);
    }
    public function expense(){
        $expenses = Expense::orderByDesc('id')->get();
        return view('admin.expense',[
            'expenses'=>$expenses
        ]);
    }
    public function expenseHotel(){
        $expenses = Hotelexpense::orderByDesc('id')->get();
        return view('admin.expenseHotel',[
            'expenses'=>$expenses
        ]);
    }
    public function addExpense(){
        return view('admin.addExpense');
    }
    public function addHotelExpense(){
        return view('admin.addHotelExpense');
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
    public function storeHotelExpense(Request $request){
        $store = Hotelexpense::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'payment_method'=>$request->paymentMethod,
        ]);
        return redirect(url('expenseHotel'))->with('success','EXPENSE ADDED SUCCESS');
    }
    public function expenseEdit($id){
        $expense = Expense::find($id);
        return view('admin.editExpense',[
            'expense'=>$expense
        ]);

    }
    public function expenseHotelEdit($id){
        $expense = Hotelexpense::find($id);
        return view('admin.editHotelExpense',[
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
    public function eHotelExpense(Request $request){
        $edit = Hotelexpense::find($request->expenseId);
        $edit->name = $request->name;
        $edit->desc = $request->desc;
        $edit->amount = $request->amount;
        $edit->date = $request->date;
        $edit->payment_method = $request->paymentMethod;
        $edit->save();
        return redirect(url('expenseHotel'))->with('success','EXPENSE EDITED SUCCESS');
    }
    public function sell(){
        $stocks = Stock::orderByDesc('id')->get();
        $sells = Sell::orderByDesc('id')->get();
        return view('admin.sell',[
            'stocks'=>$stocks,
            'sells'=>$sells
        ]);
    }
    public function sellHotel(){
        $stocks = Hotelstock::all();
        $sells = sellHotel::orderByDesc('id')->get();
        return view('admin.sellHotel',[
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
    public function stockBelowFive(){
        $products = Stock::where('quantity','<',5)->get();
        return view('admin.stockBelowFive',[
            'products'=>$products
        ]);
    }
    public function hotelStock(){
        $products = Hotelstock::orderByDesc('id')->get();
        return view('admin.hotelStock',[
            'products'=>$products
        ]);
    }
    public function addProduct(){
        return view('admin.addProduct');
    }
    public function addHotelProduct(){
        return view('admin.addProductHotel');
    }
    public function uSell(Request $request){
        $output = "";
        $sell = Sell::find($request->id);
        $buying = Stock::where('barcode',$sell->barcode)->first();
        $output = '
          <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$sell->product_name.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="field-wrapper">
                        <input type="hidden" value="'.$sell->id.'" name="sellId">
                        <input type="hidden" value="'.$sell->quantity.'" id="quant">
                        <input type="hidden" value="'.$buying->buying_price.'" name="buying_price" id="buying_p">
                            <input type="hidden" class="form-control" value="'.$sell->selling_price.'" id="realSelling">
                            <input type="text" class="form-control sel" value="'.$sell->selling_price.'" name="amount">
                            <div class="field-placeholder">Amount</div>
                        </div>
                    </div>
        ';
        return response($output);
    }
    public function uHotelSell(Request $request){
        $output = "";
        $sell = sellHotel::find($request->id);
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
        $getProduct = Stock::where('barcode',$getSell->barcode)->first();
        $getOriginalSellingPrice = $getProduct->selling_price;
        $selling_price = $request->amount;
        $dis = $getOriginalSellingPrice-$selling_price;
        $discount = $dis*$getSell->quantity;
        $calPercent = $discount/$getOriginalSellingPrice;
        $percentageDiscount = $calPercent*100;
        if ($percentageDiscount>5){
            return redirect()->back()->with('error','DISCOUNT SHOULD NOT BE MORE THAN 5%');

        }
        else{
            $quantity = $getSell->quantity;
            $amount = $request->amount;
            $total = $amount*$quantity;
            $updatePrice = Sell::where('id', $request->sellId)->update(['selling_price'=>$request->amount]);
            $updateTotal = Sell::where('id', $request->sellId)->update(['total'=>$total]);
            $updateDiscount = Sell::where('id', $request->sellId)->update(['discount'=>$discount]);
            $updateDiscountPercentage = Sell::where('id', $request->sellId)->update(['discount_percentage'=>$percentageDiscount]);
            return redirect()->back()->with('success','AMOUNT EDITED');
        }

    }
    public function burgainHotel(Request $request){
        $getSell = sellHotel::find($request->sellId);
        $quantity = $getSell->quantity;
        $amount = $request->amount;
        $total = $amount*$quantity;
        $updatePrice = sellHotel::where('id', $request->sellId)->update(['selling_price'=>$request->amount]);
        $updateTotal = sellHotel::where('id', $request->sellId)->update(['total'=>$total]);
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
    public function deleteHotelExpense(Request $request){
        $output = "";
        $stockId = Hotelexpense::find($request->id);
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
    public function dHotelExpense(Request $request){
        $delete = Hotelexpense::find($request->expenseId);
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
                                            <td class="order-status" data-title="Status">
                                                '.$sale->discount.'(<b>'.$sale->discount_percentage.'%</b>)
                                            </td>

                                            <td class="order-total" data-title="Total">
                                                <span class="amount">'.$sale->total.'</span>
                                            </td>
                                        </tr>


        ';
        }
        return response($output);
    }
    public function viewHotelSale(Request $request){
        $output = "";
        $sales = salesHotel::where('order_id',$request->id)->orderByDesc('id')->get();
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
    public function viewHotelSaleHeader(Request $request){
        $output = "";
        $sales = HotelOrder::find($request->id);
            $output .= '
               <h5 class="modal-title" id="exampleModalLabel">order #'.$sales->id.' <b style="font-size: 20px">'.$sales->phone.'</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            ';

        return response($output);
    }
    public function CalTotal(Request $request){
        $output = "";
        $getLatestOrder = Order::latest('id')->first();
        $total = Sales::where('order_id',$getLatestOrder->id)->sum('total');
        $output = '
          <td></td>
                                                        <td class="payment"><h3>Ksh '.$total.'</h3></td>
        ';
        return response($output);
    }
    public function CalTotalHotel(Request $request){
        $output = "";
        $getLatestOrder = HotelOrder::latest('id')->first();
        $total = salesHotel::where('order_id',$getLatestOrder->id)->sum('total');
        $output = '
          <td></td>
                                                        <td class="payment"><b><span>Ksh '.$total.'</span></b></td>
        ';
        return response($output);
    }
    public function profile(){
        return view('admin.profile');
    }
    public function updateProfile(Request $request){
        $update = User::find($request->id);
        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->password = Hash::make($request->password);
        $update->save();
        if ($update->role==1){
            return redirect(url('hotelAdmin'))->with('success','PROFILE UPDATED SUCCESS');
        }
        else{
            return redirect(url('admin'))->with('success','PROFILE UPDATED SUCCESS');

        }
    }
    public function filterHardware(){
        $sales = Order::orderByDesc('id')->get();
        return view('admin.indexFilter',[
            'sales'=>$sales
        ]);
    }
    public function filterHotelIndex(){
        $sales = Hotelstock::orderByDesc('id')->get();
        return view('admin.indexHotelFilter',[
            'sales'=>$sales
        ]);
    }
    public function filterMpesa(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        if (is_null($request->productId)){
            $sales  = Order::whereBetween('date', array($start_date, $end_date))->get();
            $getProfit  = Sales::whereBetween('date', array($start_date, $end_date))->sum('profit');
            $totalSales  = Sales::whereBetween('date', array($start_date, $end_date))->sum('total');
            $expense  = Hotelexpense::whereBetween('date', array($start_date, $end_date))->sum('amount');
            $products = Stock::all();
            $profit = $getProfit-$expense;
            return view('admin.indexFilter',[
                'sales'=>$sales,
                'profit'=>$profit,
                'totalSales'=>$totalSales,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'expense'=>$expense,
                'products'=>$products,
                'check'=>$request->productId,
            ]);
        }
        else{
            $sales  = Sales::whereBetween('date', array($start_date, $end_date))->where('barcode',$request->productId)->get();
            $getProfit  = Sales::whereBetween('date', array($start_date, $end_date))->where('barcode',$request->productId)->sum('profit');
            $totalSales  = Sales::whereBetween('date', array($start_date, $end_date))->where('barcode',$request->productId)->sum('total');
            $discount  = Sales::whereBetween('date', array($start_date, $end_date))->where('barcode',$request->productId)->sum('discount');
            $expense  = Hotelexpense::whereBetween('date', array($start_date, $end_date))->sum('amount');
            $products = Stock::all();
            $profit = $getProfit-$expense;
            return view('admin.indexFilter',[
                'sales'=>$sales,
                'total'=>$sales->sum('amount'),
                'profit'=>$profit,
                'totalSales'=>$totalSales,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'expense'=>$expense,
                'products'=>$products,
                'discount'=>$discount,
                'check'=>$request->productId,

            ]);
        }

    }
    public function filterHotel(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $sales  = HotelOrder::whereBetween('date', array($start_date, $end_date))->get();
        $getProfit  = salesHotel::whereBetween('date', array($start_date, $end_date))->sum('profit');
        $totalSales  = salesHotel::whereBetween('date', array($start_date, $end_date))->sum('total');
        $expense  = Hotelexpense::whereBetween('date', array($start_date, $end_date))->sum('amount');
        $profit = $getProfit-$expense;
        return view('admin.indexHotelFilter',[
            'sales'=>$sales,
            'profit'=>$profit,
            'totalSales'=>$totalSales,
            'start_date'=>$start_date,
            'end_date'=>$end_date,
            'expense'=>$expense,
        ]);
    }
    public function sellButchery(Request $request){
        $output = "";
        $sell = Hotelstock::find($request->id);
        $output = '
          <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$sell->product_name.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="field-wrapper">
                            <input type="text" class="form-control meatAmount"  id="meatAmount">
                            <div class="field-placeholder">Amount(Ksh)</div>
                        </div>
                        <div class="field-wrapper">
                            <input type="text" class="form-control"  name="meatQuantity" id="meatQuantity" disabled>
                            <div class="field-placeholder">Quantity(KG)</div>
                        </div>
                         <div class="field-wrapper">
                        <input type="hidden" value="'.$sell->id.'" id="sellId">
                            <input type="text" class="form-control" id="unitPrice" value="'.$sell->selling_price.'" disabled>
                            <div class="field-placeholder">Unit Price(KG)</div>
                        </div>
                           <div class="field-wrapper">
                        <select class="form-select" id="paymentMethod">
                            <option value="1">Mpesa</option>
                            <option value="2">Cash</option>
                        </select>
                        <div class="field-placeholder">Payment Method</div>
                    </div>
                    </div>
        ';
        return response($output);
    }

}
