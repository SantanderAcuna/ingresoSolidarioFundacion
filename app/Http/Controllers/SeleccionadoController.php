<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Seleccionado;
use Illuminate\Http\Request;

class SeleccionadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selec = $this->consulta();
    }

    public function consulta()
    {
        $selec = Seleccionado::orderBy('id', 'desc')->get();
        return $selec;
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
        $documento = Seleccionado::where('identificacion', '=', $request->ced)->first();

        if ($documento) {
            $doc = Persona::findOrFail('hogar_final');

            if ($doc) {
                return redirect('/')->with('error', 'Usted no ha sido favorecido con el programa');
            }
            return redirect('/')->with('status', 'Por favor actualice sus datos');
        } else {

            return redirect('/')->with('error', 'Usted no ha sido favorecido con el programa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seleccionado  $seleccionado
     * @return \Illuminate\Http\Response
     */
    public function show(Seleccionado $seleccionado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seleccionado  $seleccionado
     * @return \Illuminate\Http\Response
     */
    public function edit(Seleccionado $seleccionado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seleccionado  $seleccionado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seleccionado $seleccionado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seleccionado  $seleccionado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seleccionado $seleccionado)
    {
        //
    }
}
