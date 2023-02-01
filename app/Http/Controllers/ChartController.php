<?php

namespace App\Http\Controllers;

use App\Models\Setoran;
use App\Models\Tahfidz;
use Illuminate\Http\Request;

class ChartController extends Controller
{

    public function chart()
    {
        $tahfidz = Tahfidz::all();
        return view('chart.pagechart', [
            'tahfidz'   => $tahfidz,
        ]);
    }
    public function grafik($id)
    {
        $tahfidz = Tahfidz::where('id', $id)->first();
        $setoran = Setoran::where('tahfidz_id', $tahfidz->id)->get();

        $categories = [];
        $data = [];

        foreach ($setoran as $s) {
            $categories[] = $s->santri->name;
            $data[] =  $s->total_hafalan;
            $kls[]  = $s->tahfidz->nama_tahfidz;
        }
        return view('chart.chart',[
            'tahfidz'   => $tahfidz,
            'setoran'   => $setoran,
            'categories'   => $categories,
            'data'   => $data,
            'kls'   => $kls
        ]);
    }

    // public function rgstr()
    // {
    //     return view('auth.rgstr');
    // }
}
