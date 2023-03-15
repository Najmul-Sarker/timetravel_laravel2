<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   

    public function index(){
        $products = Product::all();
        
        return view('frontend.dashboard',compact('products'));
    }

    public function shop(Product $product){
        
        return view('frontend.shop.shop_details',compact('product'));
    }
}
