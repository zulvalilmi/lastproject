<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahfidzRequest;
use App\Models\Kelasandorid;
use App\Models\Tahfidz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TahfidzController extends Controller
{
    public function index()
    {
        $tahfidz    = Tahfidz::all();
        return view('Tahfidz.tabletahfid',[
            'tahfidz'   => $tahfidz,
        ]);
    }

    public function create()
    {
        $kelasandorid = Kelasandorid::all();
        $ustadzah   = User::where('role',1)->get();
        return view('Tahfidz.createtahfidz',[
            'kelasandorid'  => $kelasandorid,
            'ustadzah'    => $ustadzah,
        ]);
    }

    public function store(TahfidzRequest $request)
    {
        // dd($request->all());

        Tahfidz::create([
            'kelasandorid_id'       => $request->kelasandorid_id,
            'ustadzah_id'           => $request->ustadzah_id,
            'nama_tahfidz'          => $request->nama_tahfidz,
        ]);


        return redirect()->route('tahfidz')->with('Ok',"Kelas $request->nama_tahfidz berhasil disimpan");
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $tahfidz = Tahfidz::findOrFail($request->id);  // Cari data
        $tahfidz->delete(); // Hapus data di database
        return redirect()->back();
    }
}
