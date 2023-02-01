<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Kelasandorid;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KelasAndroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelasandorid::all();
        return view('kelasandroid.tableandroid', [
            'kelas' => $kelas,
        ]);
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
        Kelasandorid::create([
            'nama_kelas'    => $request->nama_kelas,
            'slug'          => Str::slug($request->nama_kelas),
        ]);
        return redirect()->back()->with('Ok', 'Berhasil Tambah Data !');
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
    public function update(Request $request)
    {
        // dd($request->all());

        $kelas      = Kelasandorid::findOrFail($request->id);

        $kelas->nama_kelas  = $request->nama_kelas;
        $kelas->slug        = Str::slug($request->nama_kelas);

        $kelas->update();

        return redirect()->back()->with('Ok', 'Berhasil Update Data Kelas ! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kelas =  Kelasandorid::findOrFail($request->id);
        $kelas->delete();
        return redirect()->back()->with('Ok', "Berhasil Hapus Data Kelas");
    }
}
