<?php

namespace App\Http\Controllers;

use App\Models\Pptk;
use App\Http\Requests\StorePptkRequest;
use App\Http\Requests\UpdatePptkRequest;

class PptkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pptk.index', [
            'judul' => 'List Data Pejabat Pelaksana Teknis Kegiatan',
            'versi' => 'Simontir v1.0.0 Beta Rev 12',
            'data' => Pptk::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePptkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePptkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pptk  $pptk
     * @return \Illuminate\Http\Response
     */
    public function show(Pptk $pptk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pptk  $pptk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pptk $pptk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePptkRequest  $request
     * @param  \App\Models\Pptk  $pptk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePptkRequest $request, Pptk $pptk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pptk  $pptk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pptk $pptk)
    {
        //
    }
}
