<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'judul' => 'Beranda',
            'versi' => 'Simontir v1.0.0 Beta Rev 12'
        ]);
    }
}
