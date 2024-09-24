<?php

namespace App\Http\Controllers;

use App\Hoja;
use App\Estudiante;
use Illuminate\Http\Request;

class HojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojas = Hoja::all();

        return view('admin.hojas.index', compact('hojas'));
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
            'hojas.*.titulo' => 'required|string|max:255',
            'hojas.*.entidad' => 'required|string|max:255',
            'hojas.*.fecha' => 'required|date',
            'hojas.*.documento' => 'required|string|max:255',
            
        ]);

        foreach ($request->hojas as $hojaData) {
            
            Hoja::create([
            'titulo' => $hojaData['titulo'],
            'entidad' => $hojaData['entidad'],
            'fecha' => $hojaData['fecha'],
            'documento' => $hojaData['documento'],
            
            ]);
        }
        return redirect()->route('hojas.index')->with('success', 'Registros guardados exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'entidad' => 'required|string',
            'fecha' => 'required',
            'documento' => 'required|string|max:255',
            'estudiante_id' => 'required|string|max:255',

        ]);

            $hoja = Hoja::FindOrFail($id);
            $hoja->titulo = $request->titulo;
            $hoja->entidad = $request->entidad;
            $hoja->fecha = $request->fecha;
            $hoja->documento = $request->documento;
            $hoja->estudiante_id = $request->estudiante_id;
            $hoja.save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
