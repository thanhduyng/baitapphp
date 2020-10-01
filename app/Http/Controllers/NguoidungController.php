<?php

namespace App\Http\Controllers;

use App\nguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NguoidungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoidung = DB::table('nguoidungs')->get();
        return view('dsnguoidung', compact(['nguoidung']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('createnguoidung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoidung = new nguoidung();
        $nguoidung->tennguoidung = $request->tennguoidung;
        $nguoidung->sdt = $request->sdt;
        $nguoidung->diachi = $request->diachi;
        $nguoidung->save();
        return redirect()->route('dsnguoidung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nguoidung  $nguoidung
     * @return \Illuminate\Http\Response
     */
    public function show(nguoidung $nguoidung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nguoidung  $nguoidung
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nguoidung = nguoidung::find($id);
        return view('editnguoidung', compact(['nguoidung']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nguoidung  $nguoidung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nguoidung = nguoidung::find($id);
        $nguoidungedit = $request->all();
        $nguoidung->update($nguoidungedit);
        return redirect()->route('dsnguoidung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nguoidung  $nguoidung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $nguoidung = nguoidung::destroy($id);
       return redirect()->route('dsnguoidung');
    }
}
