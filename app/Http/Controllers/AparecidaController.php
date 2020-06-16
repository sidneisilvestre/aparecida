<?php

namespace App\Http\Controllers;

use App\Aparecida;
use Illuminate\Http\Request;

class AparecidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("paroquia");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view ("capela");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aparecida  $aparecida
     * @return \Illuminate\Http\Response
     */
    public function mater()
    {
        return view ("mater");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aparecida  $aparecida
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view ("pastorais");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aparecida  $aparecida
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view ("movimentos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aparecida  $aparecida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aparecida $aparecida)
    {
        //
    }
}
