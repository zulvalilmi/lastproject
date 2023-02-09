<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        return inertia('landing'); return view('landing.index');
    }

    public function react()
    {
        return view('landing.index');
    }
}
