<?php

namespace App\Http\Controllers;

use App\Models\Kelasandorid;
use App\Models\KelasTahfidz;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kelas_android = Kelasandorid::count();
        $kelastahfidz = User::where('role',2)->count();

        return view('template.dashboard', [
            'kelas_android' => $kelas_android,
            'kelastahfidz' => $kelastahfidz,
        ]);
    }
}
