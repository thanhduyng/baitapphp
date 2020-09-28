<?php

namespace App\Http\Controllers;

use App\model_PhongBan;
use App\model_ChucDanh;
use Illuminate\Http\Request;

class phongBanController extends Controller
{
    public function hienthi()
    {
        $phong_ban = model_PhongBan::all()->toArray();
        return view('list_phongban')->with('phong_ban', $phong_ban);
    }

    public function them()
    {
        $cd = model_ChucDanh::all()->toArray();
        return view('them_phongban')->with('cd', $cd);
    }

    public function save(Request $rq)
    {
        $sp = new model_PhongBan();
        $sp->tenPhongBan = $rq->tenPhongBan;
        $sp->id_cd = $rq->id_cd;
        $sp->save();
        return redirect()->Route('phongban');
    }

    public function sua($id)
    {
        $cd = model_ChucDanh::all()->toArray();
        $pb = model_PhongBan::find($id)->toArray();
        return view('sua_phongban', compact('cd', 'pb'));
    }

    public function xoa($id)
    {
        model_PhongBan::find($id)->delete();
        return redirect()->Route('phongban');
    }

    public function save2(Request $rq)
    {   
        $pb = model_PhongBan::find($rq->id);
        $pb->tenPhongBan = $rq->tenPhongBan;
        $pb->id_cd = $rq->id_cd;
        $pb->save();
        return redirect()->Route('phongban');
    }
}
