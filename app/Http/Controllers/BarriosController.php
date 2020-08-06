<?php

namespace App\Http\Controllers;

use App\Barrios;
use Illuminate\Http\Request;

class BarriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $barrios = $this->consultaBarrios();
    }

    public function consultaBarrios()
    {
    $barrios = Barrios::orderBy('nombre', 'desc')->get();

    return $barrios;
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
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function show(Barrios $barrios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function edit(Barrios $barrios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barrios $barrios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barrios $barrios)
    {
        //
    }
}
