<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AppController extends Controller
{
    /**
     * Show home page 
     *  
     */  
    public function index(){
        return view('home');
    }

    /**
     * Show home page 
     *  
     */  
    public function products(Product $products){
        $products = Product::latest()->get();
        return view('videogames', compact('products'));
    }

    /**
     * Show home page 
     *  
     */  
    public function contacts(){
        return view('contacts');
    }
}
