<?php

namespace App\Http\Controllers;

use App\Models\Gimnasta;
use Illuminate\Http\Request;

class GimnastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gimnastas = Gimnasta::all();
        return view('gimnastas.indexGimnasta', compact('gimnastas'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gimnasta  $gimnasta
     * @return \Illuminate\Http\Response
     */
    public function show(Gimnasta $gimnasta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gimnasta  $gimnasta
     * @return \Illuminate\Http\Response
     */
    public function edit(Gimnasta $gimnasta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gimnasta  $gimnasta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gimnasta $gimnasta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gimnasta  $gimnasta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gimnasta $gimnasta)
    {
        //
    }
}
