<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
   public function home()
   {
       return view('ui.home');
   }
   public function specialOffer()
   {
       return view('ui.specialOffer');
   }
   public function delivery()
   {
       return view('ui.delivery');
   }
   public function contact()
   {
       return view('ui.contact');
   }
   public function cart()
   {
       return view('ui.cart');
   }
   public function product()
   {
       return view('ui.product');
   }
}