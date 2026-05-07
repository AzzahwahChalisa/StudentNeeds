<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'guru') {
            return view('dashboard.guru');
        }

        return view('dashboard.siswa');
    }
}