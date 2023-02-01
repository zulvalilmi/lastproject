<?php

namespace App\Http\Controllers;

use App\Http\Requests\SantriRequest;
use App\Models\Bridge;
use App\Models\Kelasandorid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri   = User::where('role', 2)->get();
        return view('santri.tablesantri', [
            'santri' => $santri,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $santri       = User::where('role', 2)->get();
        return view('santri.createsantri', [
            'santri'  => $santri,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SantriRequest $request)
    {
        // dd($request->all());
        $santri             = new User();
        $santri->name       = $request->name;
        $santri->role       = 2;
        $santri->email      = $request->email;
        $santri->password   = Hash::make($request->password);
        $santri->save();
        return redirect()->route('santri')->with('Ok',"Berhasil Menyimpan Data Santri");
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
    public function destroy(Request $request)
    {
        $santri   = User::findOrFail($request->id);
        
        $santri->delete();
        return redirect()->back()->with('Ok', 'Berhasil hapus data Santri');
    
    }
}
