<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\matrik;
use App\kriteria;

class KeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $matrik = matrik::all()->toArray(); 
        // DB::select('select * from matriks');
        $kriteria = kriteria::all()->toArray();
        // dd($matrik);
        $result = [];
        foreach ($matrik as $m) {
            $row = [];
            $hasil_akhir = 0;
            $row['matrik'] = $m;
            foreach ($kriteria as $k) {
                $hasil_akhir += $m[$k['kriteria'] . '_matrik']*$k['bobot'];
            }
            $row['hasil_akhir'] = $hasil_akhir;
            array_push($result, $row);
            // echo $hasil_akhir . '<br/>';
            // $hasil_akhir = $m*$kriteria[0]->bobot + $kriteria[1]->bobot + $kriteria[2]->bobot +
                           // $kriteria[3]->bobot + $kriteria[3]->bobot  ;
        }
        foreach ($result as $key => $value) {
            $point[$key] = $value['hasil_akhir'];
        }
        array_multisort($point, SORT_DESC, $result);
        // return $result;
        return view('keputusan.index')->with('result',$result);
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
