<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kriteria;
use DB;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kriteria = DB::select('select * from kriterias');
        return view('kriteria.index')->with('kriteria',$kriteria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kriteria.create');
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
        $jenis = $request->input('jenis_kriteria');
        $bobot = floatval($request->input('bobot_kriteria'));
        $kriteria = new kriteria;
        $kriteria->kriteria = $jenis;
        $kriteria->bobot = $bobot;
        $kriteria->save(); 
        return redirect()->route('kriteria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kriteria = kriteria::find($id);
        return view('kriteria.edit')->with('kriteria',$kriteria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $jenis = $request->input('jenis_kriteria');
        $bobot = floatval($request->input('bobot_kriteria'));
        $kriteria = kriteria::find($id);
        $kriteria->kriteria = $jenis;
        $kriteria->bobot = $bobot;
        $kriteria->save();
        return redirect()->route('kriteria.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
