<?php

namespace App\Http\Controllers;

use App\chungloai;
use App\nguoidung;
use App\nhacungcap;
use App\taisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $taisan = DB::table('taisans')->get();
       return view('dstaisan', compact(['taisan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nguoidung = DB::table('nguoidungs')->pluck('tennguoidung', 'id');
        $nhacc = DB::table('nhacungcaps')->pluck('tennhacungcap', 'id');
        $chungloai = DB::table('chungloais')->pluck('tenchungloai', 'id');
        return view('createts', compact(['nguoidung','nhacc','chungloai']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taisan = new taisan();
        $taisan->tentaisan = $request->tentaisan;
        $taisan->giatien = $request->giatien;
        $taisan->soluong = $request->soluong;
        $taisan->id_nguoidung = $request->id_nguoidung;
        $taisan->id_nhacc = $request->id_nhacc;
        $taisan->id_chungloai = $request->id_chungloai;
        $taisan->save();
        return redirect()->route('dstaisan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\taisan  $taisan
     * @return \Illuminate\Http\Response
     */
    public function show(taisan $taisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taisan  $taisan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taisan = taisan::find($id);
        $nguoidung = nguoidung::pluck('tennguoidung', 'id');
        $nhacc = nhacungcap::pluck('tennhacungcap', 'id');
        $chungloai = chungloai::pluck('tenchungloai', 'id');
        return view('editts', compact(['taisan', 'nguoidung','nhacc','chungloai']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taisan  $taisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $taisan = taisan::find($id);
        $taisanedit = $request->all();
        $taisan->update($taisanedit);
        return redirect()->route('dstaisan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taisan  $taisan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $taisan = taisan::destroy($id);
       return redirect()->route('dstaisan');
    }
}
