<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function products(){
        return view('videogames');
    }

    /**
     * Show home page 
     *  
     */  
    public function contacts(){
        return view('contacts');
    }

    
}
