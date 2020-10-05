<?php

namespace App\Http\Controllers;

use App\caphoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaphocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caphoc = DB::table('caphocs')->get();
        return view('dscaphoc', compact(['caphoc']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcaphoc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caphoc = new caphoc();
        $caphoc->tencap = $request->tencap;
        $caphoc->save();
        return redirect()->route('dscaphoc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\caphoc  $caphoc
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\caphoc  $caphoc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caphoc = caphoc::find($id);
        return view('editcaphoc',compact(['caphoc']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\caphoc  $caphoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $caphoc = caphoc::find($id);
        $caphocedit = $request->all();
        $caphoc->update($caphocedit);
        return redirect()->route('dscaphoc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\caphoc  $caphoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caphoc = caphoc::destroy($id);
        return redirect()->route('dscaphoc');
    }
}
