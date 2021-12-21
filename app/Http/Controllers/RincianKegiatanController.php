<?php

namespace App\Http\Controllers;

use App\Models\RincianKegiatan;
use App\Http\Requests\StoreRincianKegiatanRequest;
use App\Http\Requests\UpdateRincianKegiatanRequest;

class RincianKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRincianKegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRincianKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RincianKegiatan  $rincianKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(RincianKegiatan $rincianKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RincianKegiatan  $rincianKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(RincianKegiatan $rincianKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRincianKegiatanRequest  $request
     * @param  \App\Models\RincianKegiatan  $rincianKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRincianKegiatanRequest $request, RincianKegiatan $rincianKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RincianKegiatan  $rincianKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RincianKegiatan $rincianKegiatan)
    {
        //
    }
}
