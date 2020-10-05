<?php

namespace App\Http\Controllers;

use App\book;
use App\lophoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::table('books')->get();
        return view('dsbook', compact(['book']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lophoc = DB::table('lophocs')->pluck('tenlop', 'id');
        return view('createbook', compact(['lophoc']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new book();
        $book->tensach = $request->tensach;
        $book->giatien = $request->giatien;
        $book->id_lophoc = $request->id_lophoc; 
        $book->save();
        return redirect()->route('dsbook');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $book = book::find($id);
        $lophoc = lophoc::pluck('tenlop', 'id');
        return view('editbook', compact(['book', 'lophoc']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = book::find($id);
        $bookedit = $request->all();
        $book->update($bookedit);
        return redirect()->route('dsbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::destroy($id);
        return redirect()->route('dsbook');
    }
}
