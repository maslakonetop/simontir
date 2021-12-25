<?php

namespace App\Http\Controllers;

use App\Models\Rekening;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('data.index', [
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'judul' => 'List Rekening',
            'data' => Rekening::paginate(7)
        ]);
    }
}
