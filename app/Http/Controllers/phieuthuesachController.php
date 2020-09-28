<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_phieuthuesach;

class phieuthuesachController extends Controller
{
    public function hienthi()
    {
        $phieuthuesachs = model_phieuthuesach::all()->toArray();
        return view('list_phieuthuesach')->with('phieuthuesach', $phieuthuesachs);
    }

    public function them()
    {
        $phieuthuesach = model_phieuthuesach::all()->toArray();
        return view('them_phieuthuesach')->with('phieuthuesach', $phieuthuesach);
    }

    public function save(Request $request)
    {
        $phieuthuesach = new model_phieuthuesach();
        $phieuthuesach->tenphieuthue = $request->tenphieuthue;
        $phieuthuesach->ngaythue = $request->ngaythue;
        $phieuthuesach->save();
        return redirect()->Route('phieuthuesach');
    }

    public function sua($id)
    {
        $phieuthuesach = model_phieuthuesach::find($id)->toArray();
        return view('sua_phieuthuesach', compact('phieuthuesach', 'phieuthuesach'));
    }

    public function update(Request $rq)
    {   
        $phieuthuesach = model_phieuthuesach::find($rq->id);
        $phieuthuesach->tenphieuthue = $rq->tenphieuthue;
        $phieuthuesach->ngaythue = $rq->ngaythue;
        $phieuthuesach->save();
        return redirect()->Route('phieuthuesach');
    }

    public function xoa($id)
    {
        model_phieuthuesach::find($id)->delete();
        return redirect()->Route('phieuthuesach');
    }

}
