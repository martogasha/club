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

Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);
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
Route::post('sales', [\App\Http\Controllers\StockController::class, 'sales']);
Route::get('stockEdit/{id}', [\App\Http\Controllers\StockController::class, 'stockEdit']);
Route::get('sell', [\App\Http\Controllers\AdminController::class, 'sell']);
Route::get('uSell', [\App\Http\Controllers\AdminController::class, 'uSell']);
Route::post('burgain', [\App\Http\Controllers\AdminController::class, 'burgain']);
