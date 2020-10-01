<?php

namespace App\Http\Controllers;

use App\nhacungcap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhacungcapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhacc = DB::table('nhacungcaps')->get();
        return view('dsnhacungcap', compact(['nhacc']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createnhacc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhacc = new nhacungcap();
       $nhacc->tennhacungcap = $request->tennhacungcap;
       $nhacc->save();
       return redirect()->route('dsnhacungcap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show(nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhacc = nhacungcap::find($id);
       return view('editnhacc',compact(['nhacc']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $nhacc = nhacungcap::find($id);
        $nhaccedit = $request->all();
        $nhacc->update($nhaccedit);
        return redirect()->route('dsnhacungcap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $nhacc = nhacungcap::destroy($id);
      return redirect()->route('dsnhacungcap');
    }
}
