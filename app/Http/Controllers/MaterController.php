<?php

namespace App\Http\Controllers;

use App\Mater;
use Illuminate\Http\Request;

class MaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("mater");
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
     * @param  \App\Mater  $mater
     * @return \Illuminate\Http\Response
     */
    public function show(Mater $mater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mater  $mater
     * @return \Illuminate\Http\Response
     */
    public function edit(Mater $mater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mater  $mater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mater $mater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mater  $mater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mater $mater)
    {
        //
    }
}
