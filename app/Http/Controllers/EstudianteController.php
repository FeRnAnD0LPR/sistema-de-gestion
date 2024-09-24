<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Folder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view ('admin.estudiantes.index',['estudiantes'=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.estudiantes.create');
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
            'apellido_nombre' => 'required',
            'ci' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            
        ]);

        $estudiante = new Estudiante();

        $estudiante->apellido_nombre = $request->apellido_nombre;
        $estudiante->ci = $request->ci;
        $estudiante->edad = $request->edad;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono = $request->telefono;
        //$docente->formacion_profecional = $request->file(key, 'formacion_profecional')->store(path, 'formacion_docentes', options, 'public');
        $estudiante->save();

        // $folder = new Folder();
        // $folder->nombre = $request->apellido_nombre;
        // //$carpeta->ci = $request->ci;
        // $folder->save();
        

        return redirect()->route('estudiantes.index')
            ->with('mensaje','Registro correcto')
            ->with('icono','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view ('admin.estudiantes.show',['estudiante'=>$estudiante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view ('admin.estudiantes.edit',['estudiante'=>$estudiante]);
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
            'apellido_nombre' => 'required',
            'ci' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $estudiante = Estudiante::FindOrFail($id);
        //$docente = new User();
        $estudiante->apellido_nombre = $request->apellido_nombre;
        $estudiante->ci = $request->ci;
        $estudiante->edad = $request->edad;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono = $request->telefono;
        $estudiante->save();

        return redirect()->route('estudiantes.index')
            ->with('mensaje','Actualización Correcta')
            ->with('icono','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);
        return redirect()->route('estudiantes.index')
            ->with('mensaje','Eliminacion Correcta')
            ->with('icono','success');
    }
}
