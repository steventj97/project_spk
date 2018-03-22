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
        // $matrik = DB::select('select * from matriks');
        // foreach ($matrik as $m) {
        //     # code...
        // }
        DB::statement('truncate matriks');
        $parkiran = $parkiran = DB::select('select * from parkirans');
        $normalisasi  = DB::select('select * from normalisasis');
        $biaya_parkiran = normalisasi::min('biaya_parkiran_normalisasi');
        $kondisi_cuaca = normalisasi::max('kondisi_cuaca_normalisasi'); 
        $luas_tempat_parkir = normalisasi::max('luas_tempat_parkir_normalisasi');
        $jarak_dari_kampus = normalisasi::min('jarak_dari_kampus_normalisasi');
        $waktu_parkir = normalisasi::min('waktu_parkir_normalisasi');
        $loop_normalisasi = DB::select('select * from normalisasis');
            foreach ($loop_normalisasi as $normalisasi) {
                $matrik_biaya = $biaya_parkiran / $normalisasi->biaya_parkiran_normalisasi;
                $matrik_kondisi = $normalisasi->kondisi_cuaca_normalisasi / $kondisi_cuaca;
                $matrik_luas = $normalisasi->luas_tempat_parkir_normalisasi / $luas_tempat_parkir;
                $matrik_jarak = $jarak_dari_kampus / $normalisasi->jarak_dari_kampus_normalisasi;
                $matrik_waktu = $waktu_parkir / $normalisasi->waktu_parkir_normalisasi;
                $matrik  = new matrik;
                $matrik->tempat_parkiran_matrik = $normalisasi->tempat_parkiran_normalisasi;
                $matrik->biaya_parkiran_matrik = $matrik_biaya;
                $matrik->kondisi_cuaca_matrik = $matrik_kondisi;
                $matrik->luas_tempat_parkir_matrik = $matrik_luas;
                $matrik->jarak_dari_kampus_matrik= $matrik_jarak;
                $matrik->waktu_parkir_matrik = $matrik_waktu;
                $matrik->save();
            }

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
