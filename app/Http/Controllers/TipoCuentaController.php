<?php

namespace App\Http\Controllers;

use App\TipoCuenta;
use Illuminate\Http\Request;

class TipoCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = $this->consultaTipoCuentas();
    }

    public function consultaTipoCuentas()
    {
        $cuentas = TipoCuenta::orderBy('nombre', 'desc')->get();
        return $cuentas;
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
     * @param  \App\TipoCuenta  $tipoCuenta
     * @return \Illuminate\Http\Response
     */
    public function show(TipoCuenta $tipoCuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoCuenta  $tipoCuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoCuenta $tipoCuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoCuenta  $tipoCuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoCuenta $tipoCuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoCuenta  $tipoCuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoCuenta $tipoCuenta)
    {
        //
    }
}
