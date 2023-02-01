<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasTahfidzRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelasTahfidzController extends Controller
{
    public function index()
    {
        $kelastahfidz   = User::where('role', 1)->get();
        return view('kelastahfidz.kelastahfidz',[
            'kelastahfidz' => $kelastahfidz,
        ]);
    }

    public function create()
    {
        return view('kelastahfidz.createustadzah');
    }

    public function store(KelasTahfidzRequest $request)
    {
        $kelastahfidz             = new User();
        $kelastahfidz->name       = $request->name;
        $kelastahfidz->role       = 1;
        $kelastahfidz->email      = $request->email;
        $kelastahfidz->password   = Hash::make($request->password);
        $kelastahfidz->save();
        return redirect()->route('ustadzah')->with('Ok',"Berhasil Menyimpan Data Ustadzah");
    }

    public function update(KelasTahfidzRequest $request, $id)
    {
        $kelastahfidz   = User::findOrFail($id);

        $kelastahfidz->name = $request->name;
        $kelastahfidz->password = Hash::make($request->password);
        $kelastahfidz->update();

        return redirect()->back()->with('OK', 'Berhasil Update Data');
    }

    public function destroy(Request $request)
    {
        $kelastahfidz   = User::findOrFail($request->id);
        
        $kelastahfidz->delete();
        return redirect()->back()->with('Ok', 'Berhasil hapus data Ustadzah');
    }
}
