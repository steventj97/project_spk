<?php

namespace App\Http\Controllers;

use DB;
use App\normalisasi;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $normalisasi = DB::select('select * from normalisasis');
        // var_dump($parkiran);
        return view('normalisasi.index')->with('normalisasi',$normalisasi);
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
     * @param  \App\normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function show(normalisasi $normalisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(normalisasi $normalisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, normalisasi $normalisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(normalisasi $normalisasi)
    {
        //
    }
}
