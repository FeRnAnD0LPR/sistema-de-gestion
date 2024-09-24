<?php

namespace App\Http\Controllers;

use App\Vida;
use Illuminate\Http\Request;

class VidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vidas = Vida::all();

        return view('admin.vidas.index', compact('vidas'));
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
        $request->validate([
            'vidas.*.titulo' => 'required|string|max:255',
            'vidas.*.entidad' => 'required|string|max:255',
            'vidas.*.fecha' => 'required|date',
            'vidas.*.documento' => 'required|string|max:255',
            
        ]);

        foreach ($request->vidas as $vidaData) {
            
            Vida::create([
            'titulo' => $vidaData['titulo'],
            'entidad' => $vidaData['entidad'],
            'fecha' => $vidaData['fecha'],
            'documento' => $vidaData['documento'],
            
            ]);
        }
        return redirect()->route('vidas.index')->with('success', 'Registros guardados exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vida  $vida
     * @return \Illuminate\Http\Response
     */
    public function show(Vida $vida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vida  $vida
     * @return \Illuminate\Http\Response
     */
    public function edit(Vida $vida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vida  $vida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vida $vida)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'entidad' => 'required|string',
            'fecha' => 'required',
            'documento' => 'required|string|max:255',
            'estudiante_id' => 'required|string|max:255',

        ]);

            $vida = Vida::FindOrFail($id);
            $vida->titulo = $request->titulo;
            $vida->entidad = $request->entidad;
            $vida->fecha = $request->fecha;
            $vida->documento = $request->documento;
            $vida->estudiante_id = $request->estudiante_id;
            $vida.save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vida  $vida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vida $vida)
    {
        //
    }
}
