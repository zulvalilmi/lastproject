<?php

namespace App\Http\Controllers;

use App\Models\Setoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = Setoran::where('santri_id', Auth::user()->id)->get();
        // $santri = Setoran::with('santri')->get();
    //    return $santri;
        return view('parents.tampilanparents', [
            'santri' => $santri,
        ]);
    }

}