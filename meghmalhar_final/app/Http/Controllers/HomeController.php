<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }
    
    public function festive(){
         $products = Product::select('*')->where('category','Festive');
        
        
        $products = $products->paginate(12);
        
        //print_r(array_chunk($products,3));
        return view('product_item', compact('products'));
    }
     public function gown(){
         $products = Product::select('*')->where('category','Gown');

        $products = $products->paginate(12);
        
        //print_r(array_chunk($products,3));
        return view('product_item', compact('products'));
    }
     public function season_trend(){
         $products = Product::select('*')->where('category','Seasons Trend');

        $products = $products->paginate(12);
        
        //print_r(array_chunk($products,3));
        return view('product_item', compact('products'));
    }
}
