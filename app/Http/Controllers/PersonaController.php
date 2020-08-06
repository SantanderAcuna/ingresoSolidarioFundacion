<?php

namespace App\Http\Controllers;

use App\Banco;
use App\Http\Requests\RequestPersona;
use App\Persona;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sele = (new SeleccionadoController())->consulta();
        $banco = (new BancoController())->consultaBanco();
        $barrio = (new BarriosController())->consultaBarrios();
        $tipo = (new TipoCuentaController())->consultaTipoCuentas();

        return view('persona.index', compact('sele', 'banco', 'barrio', 'tipo'));
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
    public function store(RequestPersona $request)
    {
        $cuenta = Persona::where('ncuenta', '=', $request->cuenta);
        $hogarF = Persona::where('hogar_final', '=', $request->hogar);
        $doc = Persona::where('idenficacion', '=', $request->cedula);

        if ($cuenta || $hogarF || $doc) {

            return redirect('/')->with('error', 'Sus datos ya fueron actualizados  o algun miembro de su familia accedio al programa recientemente');
        }


        $persona = new Persona();

        $persona->hogar_final = $request->hogar;
        $persona->identificacion = $request->cedula;
        $persona->pri_nombre = $request->primer_nombre;
        $persona->seg_nombre = $request->segundo_nombre;
        $persona->pri_apellido = $request->primer_apellido;
        $persona->seg_apellido = $request->segundo_apellido;
        $persona->telefono = $request->telefono;
        $persona->barrio_id = $request->barrio;
        $persona->direccion = $request->direccion;
        $persona->banco_id = $request->banco;
        $persona->tipo_id = $request->tipo;
        $persona->ncuenta = $request->cuenta;

        $persona->save();


        return redirect('/')->with('status', 'Datos actualizados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
