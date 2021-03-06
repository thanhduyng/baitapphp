<?php

namespace App\Http\Controllers;

use App\dichuyentaisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DichuyentaisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nkts = DB::table('nhatkitaisan')->get();
        return view('dsnhatkitaisan', compact(['nkts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ts = DB::table('taisans')->pluck('tentaisan', 'id');
        $nd = DB::table('nguoidungs')->pluck('tennguoidung', 'id');
        return view('createnkts',compact(['ts','nd']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nkts = new dichuyentaisan();
        $nkts->id_nguoidung = $request->id_nguoidung;
        $nkts->id_taisan = $request->id_taisan;
        $nkts->ngaydichuyen = $request->ngaydichuyen;
        $nkts->save();
        return redirect()->route('dsnhatkitaisan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dichuyentaisan  $dichuyentaisan
     * @return \Illuminate\Http\Response
     */
    public function show(dichuyentaisan $dichuyentaisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dichuyentaisan  $dichuyentaisan
     * @return \Illuminate\Http\Response
     */
    public function edit(dichuyentaisan $dichuyentaisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dichuyentaisan  $dichuyentaisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dichuyentaisan $dichuyentaisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dichuyentaisan  $dichuyentaisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dichuyentaisan $dichuyentaisan)
    {
        //
    }
}
