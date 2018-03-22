<?php

namespace App\Http\Controllers;
use DB;
use App\matrik;
use App\normalisasi;
use Illuminate\Http\Request;

class MatrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $matrik = DB::select('select * from matriks');
        return view('matrik.index')->with('matrik',$matrik);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function show(matrik $matrik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function edit(matrik $matrik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matrik $matrik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function destroy(matrik $matrik)
    {
        //
    }
}
