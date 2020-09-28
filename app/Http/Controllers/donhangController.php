<?php

namespace App\Http\Controllers;

use App\model_donhang;
use Illuminate\Http\Request;


class donhangController extends Controller
{
    public function hienthi()
    {
        $donhang = model_donhang::all()->toArray();
        return view('view_donhang')->with('donhang', $donhang);
    }

    public function ngayban()
    {
        $donhang = model_donhang::query('');
        return view('view_ngayban')->with('donhang', $donhang);
    }
}
