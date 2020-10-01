<?php

namespace App\Http\Controllers;

use App\model_nguoidung;
use App\model_phongbans;
use Illuminate\Http\Request;

class ModelNguoidungController extends Controller
{
    public function hienthi()
    {
        $nguoi_dung = model_nguoidung::all()->toArray();
        return view('list_nguoidung')->with('nguoi_dung', $nguoi_dung);
    }

    public function them()
    {
        $phong_ban = model_phongbans::all()->toArray();
        return view('them_nguoidung')->with('phong_ban', $phong_ban);
    }

    public function save(Request $rq)
    {
        $nguoi_dung = new model_nguoidung();
        $nguoi_dung->tennguoidung = $rq->tennguoidung;
        $nguoi_dung->id_phongban = $rq->id_phongban;
        $nguoi_dung->save();
        return redirect()->Route('nguoidung');
    }

    public function sua($id)
    {
        $pb = model_phongbans::all()->toArray();
        $nguoi_dung = model_nguoidung::find($id)->toArray();
        return view('sua_nguoidung', compact('pb', 'nguoi_dung'));
    }

   

    public function update(Request $rq)
    {   
        $nguoi_dung = model_nguoidung::find($rq->id);
        $nguoi_dung->tennguoidung = $rq->tennguoidung;
        $nguoi_dung->id_phongban = $rq->id_phongban;
        $nguoi_dung->save();
        return redirect()->Route('nguoidung');
    }
}
