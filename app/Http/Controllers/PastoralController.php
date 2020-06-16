<?php

namespace App\Http\Controllers;

use App\Pastoral;
use Illuminate\Http\Request;

class PastoralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("pastorais");
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
     * @param  \App\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function show(Pastoral $pastoral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function edit(Pastoral $pastoral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pastoral $pastoral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pastoral $pastoral)
    {
        //
    }
}
