<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   public function XinChao(){
      echo "Xin chào các bạn: ";
   }

   public function KhoaHoc($ten){
    echo "Xin chào bạn: ".$ten;
 }
}
