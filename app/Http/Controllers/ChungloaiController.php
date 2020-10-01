<?php

namespace App\Http\Controllers;

use App\chungloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChungloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chungloai = DB::table('chungloais')->get();
        return view('dschungloai', compact(['chungloai']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('createchungloai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $chungloai = new chungloai();
       $chungloai->tenchungloai = $request->tenchungloai;
       $chungloai->save();
       return redirect()->route('dschungloai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\chungloai  $chungloai
     * @return \Illuminate\Http\Response
     */
    public function show(chungloai $chungloai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chungloai  $chungloai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $chungloai = chungloai::find($id);
       return view('editchungloai',compact(['chungloai']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chungloai  $chungloai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chungloai = chungloai::find($id);
        $chungloaiedit = $request->all();
        $chungloai->update($chungloaiedit);
        return redirect()->route('dschungloai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chungloai  $chungloai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $chungloai = chungloai::destroy($id);
       return redirect()->route('dschungloai');
    }
}
