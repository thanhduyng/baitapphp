<?php

namespace App\Http\Controllers;

use App\model_sach;
use Illuminate\Http\Request;

class sachController extends Controller
{

    public function hienthi()
    {
        $sach = model_sach::all()->toArray();
        return view('list_sach')->with('sach', $sach);
    }

    public function them()
    {
        $sach = model_sach::all()->toArray();
        return view('them_sach')->with('sach', $sach);
    }

    public function save(Request $request)
    {
        $sach = new model_sach();
        $sach->tensach = $request->tensach;
        $sach->save();
        return redirect()->Route('sach');
    }

    public function sua($id)
    {
        $sach = model_sach::find($id)->toArray();
        return view('sua_sach', compact('sach', 'sach'));
    }

    public function update(Request $rq)
    {   
        $sach = model_sach::find($rq->id);
        $sach->tensach = $rq->tensach;
        $sach->save();
        return redirect()->Route('sach');
    }

    public function xoa($id)
    {
        model_sach::find($id)->delete();
        return redirect()->Route('sach');
    }

}
