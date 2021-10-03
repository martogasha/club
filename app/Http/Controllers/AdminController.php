<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function sell(){
        return view('admin.sell');
    }
    public function stock(){
        return view('admin.stock');
    }
    public function addProduct(){
        return view('admin.addProduct');
    }
}
