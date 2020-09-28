<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chucnang;

class chucnangController extends Controller
{
    public function them(Request $request){

        // thêm mới
        $cn = new chucnang();
        $cn->ten=$request->ten;
        $cn->save();

        // update
        $cn = chucnang::find(1);
        $cn->ten=$request->ten;
        $cn->save();
}
}
