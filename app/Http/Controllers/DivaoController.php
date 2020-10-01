<?php

namespace App\Http\Controllers;

use App\divao;
use App\mayquetthe;
use App\model_nguoidung;
use Illuminate\Http\Request;

class DivaoController extends Controller
{
    public function hienthi()
    {
        $divao = divao::all()->toArray();
        return view('list_divao')->with('divao', $divao);
    }

    public function them()
    {
        $divao = divao::all()->toArray();
        $nguoi_dung = model_nguoidung::all()->toArray();
        $mayquetthe = mayquetthe::all()->toArray();
        return view('them_divao', compact(['divao', 'nguoi_dung','mayquetthe']));
    }

    public function save(Request $rq)
    {
        $divao = new divao();
        $divao->giovao = $rq->giovao;
        $divao->id_nguoidung = $rq->id_nguoidung;
        $divao->id_mayquetthe = $rq->id_mayquetthe;
        $divao->save();
        return redirect()->Route('divao');
    }
}
