<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Front\VerifiesEmails;

class AdminController extends Controller
{
  public function showAdminName(){
    return "Kerolos Fakhry";
  }

  public function getIndex(){
    $data = ['Kerolos','Mina','Abanoub'];
     return view('welcome',compact('data'));  
  }

  public function showData(){
    $obj = new \stdClass();
    $obj -> id = 20;
    $obj -> name = "Kerolos Fakhry";
    $obj -> age = 21;
    return view('welcome',compact('obj'));
  }
}
