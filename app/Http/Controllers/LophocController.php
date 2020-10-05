<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LophocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lophoc = DB::table('lophocs')->get();
        return view('dslophoc', compact(['lophoc']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlophoc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lophoc = new lophoc();
        $lophoc->tenlop = $request->tenlop;
        $lophoc->save();
        return redirect()->route('dslophoc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lophoc  $lophoc
     * @return \Illuminate\Http\Response
     */
    public function show(lophoc $lophoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lophoc  $lophoc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lophoc = lophoc::find($id);
        return view('editlophoc',compact(['lophoc']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lophoc  $lophoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lophoc = lophoc::find($id);
        $lophocedit = $request->all();
        $lophoc->update($lophocedit);
        return redirect()->route('dslophoc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lophoc  $lophoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lophoc = lophoc::destroy($id);
        return redirect()->route('dslophoc');
    }
}
