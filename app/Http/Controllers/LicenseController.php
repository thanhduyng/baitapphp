<?php

namespace App\Http\Controllers;

use App\book;
use App\license;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $license = DB::table('licenses')->get();
        return view('dslicense', compact(['license']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = DB::table('books')->pluck('tensach', 'id');
        return view('createlicense', compact(['book']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $license = new license();
        $license->ma_license = $request->ma_license;
        $license->id_book = $request->id_book;
        $license->trangthai = $request->trangthai; 
        $license->ngaydung = $request->ngaydung; 
        $license->save();
        return redirect()->route('dslicense');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\license  $license
     * @return \Illuminate\Http\Response
     */
    public function show(license $license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\license  $license
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $license = license::find($id);
        $book = book::pluck('tensach', 'id');
        return view('editlicense', compact(['license', 'book']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\license  $license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $license = license::find($id);
        $licenseedit = $request->all();
        $license->update($licenseedit);
        return redirect()->route('dslicense');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\license  $license
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $license = license::destroy($id);
        return redirect()->route('dslicense');
    }

    public function baocao()
    {
        $baocao = DB::select(
            'SELECT
            max(caphocs.tencap) as tencap,
            max(lophocs.tenlop) as tenlop,
            licenses.ngaydung,
            count(*) as soluong
            from lophocs
            inner join caphocs on lophocs.id_caphoc = caphocs.id
            inner join books on lophocs.id = books.id_lophoc
            inner join licenses on books.id = licenses.id_book
            where licenses.trangthai = 1	
            group by caphocs.id, lophocs.id, licenses.ngaydung'
        );
    return view("baocaosoluongtrongngay",["baocao"=>$baocao]);
    }
}
