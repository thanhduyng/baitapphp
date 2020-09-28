<?php

namespace App\Http\Controllers;

use App\model_ChucDanh;
use Illuminate\Http\Request;

class chucDanhController extends Controller
{
    public function hienthi()
    {
        $chuc_danh = model_ChucDanh::all()->toArray();
        return view('list_chucdanh')->with('chuc_danh', $chuc_danh);
    }

    public function them()
    {
        $cd = model_ChucDanh::all()->toArray();
        return view('them_chucdanh')->with('cd', $cd);
    }

    public function save(Request $rq)
    {
        $cd = new model_ChucDanh();
        $cd->tenChucDanh = $rq->tenChucDanh;
        $cd->save();
        return redirect()->Route('chucdanh');
    }

    public function sua($id)
    {
        $cd = model_ChucDanh::find($id)->toArray();
        return view('sua_chucdanh', compact('cd', 'cd'));
    }

    public function save2(Request $rq)
    {   
        $cd = model_ChucDanh::find($rq->id);
        $cd->tenChucDanh = $rq->tenChucDanh;
        $cd->save();
        return redirect()->Route('chucdanh');
    }

    public function xoa($id)
    {
        model_ChucDanh::find($id)->delete();
        return redirect()->Route('chucdanh');
    }

}
