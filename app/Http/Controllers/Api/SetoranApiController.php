<?php

namespace App\Http\Controllers\Api;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Setoran;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SetoranApiController extends Controller
{
    public function index()
    {
        $setoran    = Setoran::get()
                      ->map(function ($setoran){
                        return $this->format($setoran);
                      });
        return $this->result($setoran);
    }

    public function detail($id)
    {
        $setoran = Setoran::where('id', $id)
                    ->get()
                    ->map(function ($setoran){
                        return $this->format($setoran);
                    });
            return $this->result($setoran);

    }

    public function tambah(Request $request)
    {
        $validasi = Validator::make($request->all(),[
            'santri_id'             => 'required',
            'tahfidz_id'            => 'required',
            'surat_ziyadah'         => 'required',
            'ayat_ziyadah'          => 'required',
            'surat_murojaah'        => 'required',
            'ayat_murojaah'         => 'required',
            'total_hafalan'         => 'required',
        ]);

        if($validasi->fails()){
            $valIndex = $validasi->errors()->all();
            return MessageHelper::error(false, $valIndex[0]);
        }

        $setoran = Setoran::create([
            'santri_id'             => $request->santri_id,
            'tahfidz_id'            => $request->tahfidz_id,
            'surat_ziyadah'         => $request->surat_ziyadah,
            'ayat_ziyadah'          => $request->ayat_ziyadah,
            'surat_murojaah'        => $request->surat_murojaah,
            'ayat_murojaah'         => $request->ayat_murojaah,
            'total_hafalan'         => $request->total_hafalan,
        ]);

        $setoran = Setoran::where('id', $setoran->id)
                    ->get()
                    ->map(function ($setoran){
                        return $this->format($setoran);
                    });
        return $this->result($setoran);
    }

    public function format($setoran)
    {
        return [
            'id'                    =>$setoran->id,
            'santri_id'             => $setoran->santri->name,
            'tahfidz_id'            => $setoran->tahfidz->ustadzah->name,
            'surat_ziyadah'         => $setoran->surat_ziyadah,
            'ayat_ziyadah'          => $setoran->ayat_ziyadah,
            'surat_murojaah'        => $setoran->surat_murojaah,
            'ayat_murojaah'         => $setoran->ayat_murojaah,
            'total_hafalan'         => $setoran->total_hafalan,
        ];
    }

    public function result($setoran)
    {
        return response()->json([
            'status' =>true,
            'msg'   => "Berhasil Mendapat Data Setoran",
            'data'  => $setoran,
        ], 200);
    }

    public function errorWoy($status, $message)
    {
        return response()->json([
            'status'    => $status,
            'message'    => $message,
        ], 200);
    }
}
