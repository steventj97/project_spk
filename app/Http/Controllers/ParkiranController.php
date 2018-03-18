<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\parkiran;
use DateTime;

class ParkiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parkiran = DB::select('select * from parkirans');
        // var_dump($parkiran);
        return view('parkiran.index')->with('parkiran',$parkiran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('parkiran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tempat = $request->input('tempat_parkiran');
        $biaya = intval($request->input('biaya_parkiran'));
        $kondisi = $request->input('kondisi_cuaca');
        $luas = intval($request->input('luas_parkiran'));
        $jarak = intval($request->input('jarak_parkiran'));
        $waktu = $request->input('waktu_parkir');
        $parkiran  = new parkiran;
        $parkiran->tempat_parkiran = $tempat;
        $parkiran->biaya_parkiran = $biaya;
        $parkiran->kondisi_cuaca = $kondisi;
        $parkiran->luas_tempat_parkir = $luas;
        $parkiran->jarak_dari_kampus= $jarak;
        $parkiran->waktu_parkir = $waktu;
        $parkiran->save();
        return redirect()->route('parkiran.index');
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
        $parkiran = parkiran::find($id);
        return view('parkiran.edit')->with('parkiran',$parkiran);
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
         $tempat = $request->input('tempat_parkiran');
        $biaya = intval($request->input('biaya_parkiran'));
        $kondisi = $request->input('kondisi_cuaca');
        $luas = intval($request->input('luas_parkiran'));
        $jarak = intval($request->input('jarak_parkiran'));
        $waktu = $request->input('waktu_parkir');
        $parkiran  = parkiran::find($id);
        $parkiran->tempat_parkiran = $tempat;
        $parkiran->biaya_parkiran = $biaya;
        $parkiran->kondisi_cuaca = $kondisi;
        $parkiran->luas_tempat_parkir = $luas;
        $parkiran->jarak_dari_kampus= $jarak;
        $parkiran->waktu_parkir = $waktu;
        $parkiran->save();
        return redirect()->route('parkiran.index');
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
