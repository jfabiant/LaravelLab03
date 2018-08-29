<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        return view ('Front.index');
    }
    public function cine (){
        return view ("Cine.index");
    }
    public function gaseosa (){
        return view ("Gaseosa.index");
    }
    public function hotel (){
        return view ("Hotel.index");
    }
    
}
