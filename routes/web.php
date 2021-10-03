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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('stock', [\App\Http\Controllers\AdminController::class, 'stock']);
Route::get('addProduct', [\App\Http\Controllers\AdminController::class, 'addProduct']);
Route::get('sell', [\App\Http\Controllers\AdminController::class, 'sell']);
