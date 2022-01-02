<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDashboardController extends Controller
{
    public function index(){
        $products=Product::paginate(5);
        return view('dashboard.Product',compact('products'));
    }
}
