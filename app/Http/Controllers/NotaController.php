<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();
        return view ('admin.notas.index',['notas'=>$notas]);
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
    public function store1(Request $request)
    {
        $request->validate([
            'postulante' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
            'nota3' => 'required',
            'nota4' => 'required',
            'nota5' => 'required',
            'nota6' => 'required',
            'nota7' => 'required',
        ]);

        $total1 = ($request->nota1 + $request->nota2 + $request->nota3 + $request->nota4 + $request->nota5 + $request->nota6 + $request->nota7) * 0.4;

        $nota = new Nota();
        $nota->postulante = $request->postulante;
        $nota->nota1 = $request->nota1;
        $nota->nota2 = $request->nota2;
        $nota->nota3 = $request->nota3;
        $nota->nota4 = $request->nota4;
        $nota->nota5 = $request->nota5;
        $nota->nota6 = $request->nota6;
        $nota->nota7 = $request->nota7;
        $nota->total1 = $request->$total1;
        $nota->save;

        
        return redirect()->route('notas.index')
            ->with('mensaje','Registro de notas exitosa')
            ->with('icono','success');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'postulante' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
            'nota3' => 'required',
            'nota4' => 'required',
            'nota5' => 'required',
            'nota6' => 'required',
            'nota7' => 'required',
        ]);

        $total2 = ($request->tema + $request->interaccion + $request->respuestas) * 0.6;

        $nota = new Nota();
        $nota->postulante = $request->postulante;
        $nota->tema = $request->tema;
        $nota->interaccion = $request->interaccion;
        $nota->respuestas = $request->respuestas;
        $nota->total2 = $request->$total2;
        $nota->save;

        
        return redirect()->route('notas.index')
            ->with('mensaje','Registro de notas exitosa')
            ->with('icono','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
