<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\parkiran;
use App\normalisasi;
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
        //Biaya Normalisasi
        if ( $biaya < 3000 ) {
            $biaya_normalisasi = 1;
        }else if ( $biaya < 6000) {
            $biaya_normalisasi = 2;
        }else if ( $biaya < 9000 ) {
            $biaya_normalisasi = 3;
        }else if ( $biaya < 12000 ) {
            $biaya_normalisasi = 4;
        }else {
            $biaya_normalisasi = 5;
        }
        //Kondisi Cuaca 
        if ( $kondisi === "cerah" ) {
            $kondisi_normalisasi = 1;
        }else if ( $kondisi === "berawan") {
            $kondisi_normalisasi = 2;
        }else if ( $kondisi === "mendung") {
            $kondisi_normalisasi = 3;
        }else if ( $kondisi === "gerimis" ) {
            $kondisi_normalisasi = 4;
        }else {
            $kondisi_normalisasi = 5;
        }
        //luas parkiran
        if ( $luas <= 30  ) {
            $luas_normalisasi = 1;
        }else if ( $jarak <= 80) {
            $luas_normalisasi = 2;
        }else if ( $jarak <= 130 ) {
            $luas_normalisasi = 3;
        }else if ( $jarak <= 180 ) {
            $luas_normalisasi = 4;
        }else {
            $luas_normalisasi = 5;
        }
        //Jarak dari kampus
        if ( $jarak < 100 ) {
            $jarak_normalisasi = 5;
        }else if ( $jarak < 200) {
            $jarak_normalisasi = 4;
        }else if ( $jarak < 300 ) {
            $jarak_normalisasi = 3;
        }else if ( $jarak < 400 ) {
            $jarak_normalisasi = 2;
        }else {
            $jarak_normalisasi = 1;
        }
        //waktu kampus
        if ( $waktu === "subuh" ) {
            $waktu_normalisasi = 1;
        }else if ( $waktu === "pagi") {
            $waktu_normalisasi = 2;
        }else if ( $waktu === "siang" ) {
            $waktu_normalisasi = 3;
        }else if ( $waktu === "sore" ) {
            $waktu_normalisasi = 4;
        }else {
            $waktu_normalisasi = 5;
        }
        $normalisasi  = new normalisasi;
        $normalisasi->tempat_parkiran_normalisasi = $tempat;
        $normalisasi->biaya_parkiran_normalisasi = $biaya_normalisasi;
        $normalisasi->kondisi_cuaca_normalisasi = $kondisi_normalisasi;
        $normalisasi->luas_tempat_parkir_normalisasi = $luas_normalisasi;
        $normalisasi->jarak_dari_kampus_normalisasi= $jarak_normalisasi;
        $normalisasi->waktu_parkir_normalisasi = $waktu_normalisasi;
        $normalisasi->save();

        $biaya_parkiran = normalisasi::min('biaya_parkiran_normalisasi');
        $kondisi_cuaca = normalisasi::max('kondisi_cuaca_normalisasi'); 
        $luas_tempat_parkir = normalisasi::max('luas_tempat_parkir_normalisasi');
        $jarak_dari_kampus = normalisasi::min('jarak_dari_kampus_normalisasi');
        $waktu_parkir = normalisasi::min('waktu_parkir_normalisasi');
        $normalisasi = DB::select('select * from normalisasis');
        //min  matriks function waktu
        foreach ($normalisasi as $normalisasi) {
            $matrik_biaya = $biaya_parkiran / $normalisasi->biaya_parkiran_normalisasi;
            $matrik_kondisi = $normalisasi->kondisi_cuaca_normalisasi / $kondisi_cuaca;
            $matrik_luas = $normalisasi->luas_tempat_parkir_normalisasi / $luas_tempat_parkir;
            $matrik_jarak = $jarak_dari_kampus / $normalisasi->jarak_dari_kampus_normalisasi;
            $matrik_waktu = $waktu_parkir / $normalisasi->waktu_parkir_normalisasi;
        }
        $matrik  = new matrik;
        $matrik->tempat_parkiran_matrik = $tempat;
        $matrik->biaya_parkiran_matrik = $matrik_biaya;
        $matrik->kondisi_cuaca_matrik = $matrik_kondisi;
        $matrik->luas_tempat_parkir_matrik = $matrik_luas;
        $matrik->jarak_dari_kampus_matrik= $matrik_jarak;
        $matrik->waktu_parkir_matrik = $matrik_waktu;
        $matrik->save();
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
                //Biaya Normalisasi
        if ( $biaya < 3000 ) {
            $biaya_normalisasi = 1;
        }else if ( $biaya < 6000) {
            $biaya_normalisasi = 2;
        }else if ( $biaya < 9000 ) {
            $biaya_normalisasi = 3;
        }else if ( $biaya < 12000 ) {
            $biaya_normalisasi = 4;
        }else {
            $biaya_normalisasi = 5;
        }
        //Kondisi Cuaca 
        if ( $kondisi === "cerah" ) {
            $kondisi_normalisasi = 1;
        }else if ( $kondisi === "berawan") {
            $kondisi_normalisasi = 2;
        }else if ( $kondisi === "mendung") {
            $kondisi_normalisasi = 3;
        }else if ( $kondisi === "gerimis" ) {
            $kondisi_normalisasi = 4;
        }else {
            $kondisi_normalisasi = 5;
        }
        //luas parkiran
        if ( $luas <= 30  ) {
            $luas_normalisasi = 1;
        }else if ( $jarak <= 80) {
            $luas_normalisasi = 2;
        }else if ( $jarak <= 130 ) {
            $luas_normalisasi = 3;
        }else if ( $jarak <= 180 ) {
            $luas_normalisasi = 4;
        }else {
            $luas_normalisasi = 5;
        }
        //Jarak dari kampus
        if ( $jarak < 100 ) {
            $jarak_normalisasi = 5;
        }else if ( $jarak < 200) {
            $jarak_normalisasi = 4;
        }else if ( $jarak < 300 ) {
            $jarak_normalisasi = 3;
        }else if ( $jarak < 400 ) {
            $jarak_normalisasi = 2;
        }else {
            $jarak_normalisasi = 1;
        }
        //waktu kampus
        if ( $waktu === "subuh" ) {
            $waktu_normalisasi = 1;
        }else if ( $waktu === "pagi") {
            $waktu_normalisasi = 2;
        }else if ( $waktu === "siang" ) {
            $waktu_normalisasi = 3;
        }else if ( $waktu === "sore" ) {
            $waktu_normalisasi = 4;
        }else {
            $waktu_normalisasi = 5;
        }
        $normalisasi  = normalisasi::find($id);;
        $normalisasi->tempat_parkiran_normalisasi = $tempat;
        $normalisasi->biaya_parkiran_normalisasi = $biaya_normalisasi;
        $normalisasi->kondisi_cuaca_normalisasi = $kondisi_normalisasi;
        $normalisasi->luas_tempat_parkir_normalisasi = $luas_normalisasi;
        $normalisasi->jarak_dari_kampus_normalisasi= $jarak_normalisasi;
        $normalisasi->waktu_parkir_normalisasi = $waktu_normalisasi;
        $normalisasi->save();

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
