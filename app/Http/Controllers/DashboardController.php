<?php

namespace App\Http\Controllers;

use App\Models\Pptk;
use App\Models\Rekening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('rekenings')
            ->select('koderekening', 'anggaran')
            ->get();

        return view('dashboard.index', [
            'judul' => 'Beranda',
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'rekening' => Rekening::select('id')->count(),
            'totrek' => Rekening::sum('anggaran'),
            'pptk' => Pptk::select('id')->count(),
            'data' => $data
        ]);
    }
}
