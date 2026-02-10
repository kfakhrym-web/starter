<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class FirstController extends Controller
{

public function __construct(){
    $this->middleware('auth')->except('showString1');
}

    public function showString0(){
        return "First Controller0";
    }

     public function showString1(){
        return "First Controller1";
    }

     public function showString2(){
        return "First Controller2";
    }

     public function showString3(){
        return "First Controller3";
    }
}
