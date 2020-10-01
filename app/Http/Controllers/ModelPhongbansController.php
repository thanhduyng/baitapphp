<?php

namespace App\Http\Controllers;

use App\model_phongbans;
use Illuminate\Http\Request;

class ModelPhongbansController extends Controller
{
    public function hienthi()
    {
        $pb = model_phongbans::all()->toArray();
        return view('view_phongbans')->with('pb', $pb);
    }

    public function them()
    {
        $pb = model_phongbans::all()->toArray();
        return view('add_phongban')->with('pb', $pb);
    }

    public function save(Request $rq)
    {
        $pb = new model_phongbans();
        $pb->tenphongban = $rq->tenphongban;
        $pb->save();
        return redirect()->Route('listphongban');
    }

    public function sua($id)
    {
        $pb = model_phongbans::find($id)->toArray();
        return view('edit_phongban', compact('pb', 'pb'));
    }

    public function edit2(Request $rq)
    {   
        $pb = model_phongbans::find($rq->id);
        $pb->tenphongban = $rq->tenphongban;
        $pb->save();
        return redirect()->Route('listphongban');
    }

}
