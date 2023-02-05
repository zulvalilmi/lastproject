<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function react()
    {
        return inertia('landing');
    }
}
