<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/f', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [\App\Http\Controllers\AuthController::class, 'index']);
Route::get('users', [\App\Http\Controllers\AuthController::class, 'users']);
Route::get('deleteUser', [\App\Http\Controllers\AuthController::class, 'deleteUser']);
Route::post('eUser', [\App\Http\Controllers\AuthController::class, 'eUser']);
Route::post('dUser', [\App\Http\Controllers\AuthController::class, 'dUser']);
Route::get('reset/{id}', [\App\Http\Controllers\AuthController::class, 'reset']);
Route::post('Login', [\App\Http\Controllers\AuthController::class, 'Login']);
Route::get('addUser', [\App\Http\Controllers\AuthController::class, 'addUser']);
Route::post('storeUsers', [\App\Http\Controllers\AuthController::class, 'storeUsers']);
Route::get('userEdit/{id}', [\App\Http\Controllers\AuthController::class, 'userEdit']);
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('stock', [\App\Http\Controllers\AdminController::class, 'stock']);
Route::get('addProduct', [\App\Http\Controllers\AdminController::class, 'addProduct']);
Route::post('storeStock', [\App\Http\Controllers\StockController::class, 'storeStock']);
Route::get('viewStock', [\App\Http\Controllers\StockController::class, 'viewStock']);
Route::get('deleteStock', [\App\Http\Controllers\StockController::class, 'deleteStock']);
Route::post('eStock', [\App\Http\Controllers\StockController::class, 'eStock']);
Route::post('dStock', [\App\Http\Controllers\StockController::class, 'dStock']);
Route::get('sellStock', [\App\Http\Controllers\StockController::class, 'sellStock']);
Route::get('add', [\App\Http\Controllers\StockController::class, 'add']);
Route::get('minus', [\App\Http\Controllers\StockController::class, 'minus']);
Route::get('del', [\App\Http\Controllers\StockController::class, 'del']);
Route::get('sales', [\App\Http\Controllers\StockController::class, 'sales']);
Route::get('stockEdit/{id}', [\App\Http\Controllers\StockController::class, 'stockEdit']);
Route::get('sell', [\App\Http\Controllers\AdminController::class, 'sell']);
Route::get('uSell', [\App\Http\Controllers\AdminController::class, 'uSell']);
Route::post('burgain', [\App\Http\Controllers\AdminController::class, 'burgain']);
Route::get('expense', [\App\Http\Controllers\AdminController::class, 'expense']);
Route::get('addExpense', [\App\Http\Controllers\AdminController::class, 'addExpense']);
Route::post('storeExpense', [\App\Http\Controllers\AdminController::class, 'storeExpense']);
Route::get('expenseEdit/{id}', [\App\Http\Controllers\AdminController::class, 'expenseEdit']);
Route::post('eExpense', [\App\Http\Controllers\AdminController::class, 'eExpense']);
Route::get('deleteExpense', [\App\Http\Controllers\AdminController::class, 'deleteExpense']);
Route::post('dExpense', [\App\Http\Controllers\AdminController::class, 'dExpense']);
Route::get('viewSale', [\App\Http\Controllers\AdminController::class, 'viewSale']);
Route::get('viewSaleHeader', [\App\Http\Controllers\AdminController::class, 'viewSaleHeader']);
