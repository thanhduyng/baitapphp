<?php

namespace App\Http\Controllers;

use App\model_sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sach_controller extends Controller
{
    public function index()
    {
        $sachs = DB::table("sachs")->get();
        return view("viewsach", compact(['sachs']));
    }

    public function create()
    {
        return view('addsach');
    }

  
    public function store(Request $request)
    {
        $sachs = new model_sach();
        $sachs->tensach=$request->tensach;
        $sachs->save();
        return redirect()->Route('viewsach');
    }

    public function edit($id)
    {
        $sach = model_sach::find($id);
        return view("editsach", compact(['sach']));
    }

 
    public function update(Request $request, $id)
    {
        $sach = model_sach::find($id);
        $sachedit = $request->all();
        if($sach->update($sachedit)){
            return redirect()->route('viewsach');
        }
    }

 
    public function destroy($id)
    {
        $sach = model_sach::destroy($id);
        return redirect()->route('viewsach');
    }

    public function viewBaoCaoSach(Request $request){
        $search = $request->search;
        $sachThang = DB::table('sachs')
            ->leftJoin('phieuthuesach', 'sachs.id', '=', 'phieuthuesach.idsach_thue')
            ->select('thuesaches.nguoi_thue', 'thuesaches.soluong_thue')
            ->whereMonth('ngay_thue', $search)
            ->orderByDesc('thuesaches.soluong_thue')
            ->get();
        return view("viewBaoCaoSach", compact(['sachThang'])); 
    }
}
