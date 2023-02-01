<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetoranRequest;
use App\Models\Kelasandorid;
use App\Models\Setoran;
use App\Models\Tahfidz;
use App\Models\User;
use Illuminate\Http\Request;

class SetoranController extends Controller
{
    public function setoran()
    {
        $setoran    = Setoran::all();
       return view('catatan.setoran', [
        'setoran' => $setoran,
       ]);
    }

    public function create()
    {
        $tahfidz = Tahfidz::all();
        $santri = User::where('role', 2)->get();
        return view('catatan.createsetoran', [
            'tahfidz' => $tahfidz,
            'santri' => $santri,
        ]);   
    }

    public function store(SetoranRequest $request)
    {
        // dd($request->all());

        Setoran::create([
            'santri_id'       => $request->santri_id,
            'tahfidz_id'           => $request->tahfidz_id,
            'surat_ziyadah'          => $request->surat_ziyadah,
            'ayat_ziyadah'          => $request->ayat_ziyadah,
            'surat_murojaah'          => $request->surat_murojaah,
            'ayat_murojaah'          => $request->ayat_murojaah,
            'total_hafalan'          => $request->total_hafalan,
        ]);


        return redirect()->route('setoran')->with('Ok',"Kelas $request->nama_tahfidz berhasil disimpan");
    }

    public function destroy(Request $request)
    {
        $santri   = Setoran::findOrFail($request->id);
        
        $santri->delete();
        return redirect()->back()->with('Ok', 'Berhasil hapus data Santri');
    }
}
