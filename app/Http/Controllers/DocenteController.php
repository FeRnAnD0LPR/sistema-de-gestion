<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view ('admin.docentes.index',['docentes'=>$docentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$docentes = request()->all();
        //return response()->json($docentes);
        $request->validate([
            'apellido_nombre' => 'required',
            'ci' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);


        $docente = new Docente();

        $docente->apellido_nombre = $request->apellido_nombre;
        $docente->ci = $request->ci;
        $docente->edad = $request->edad;
        $docente->direccion = $request->direccion;
        $docente->telefono = $request->telefono;
        //$docente->formacion_profecional = $request->file(key, 'formacion_profecional')->store(path, 'formacion_docentes', options, 'public');
        $docente->save();

       

        return redirect()->route('docentes.index')
            ->with('mensaje','Registro correcto y carpeta creada')
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
        $docente = Docente::findOrFail($id);
        return view ('admin.docentes.show',['docente'=>$docente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view ('admin.docentes.edit',['docente'=>$docente]);

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

        $docente = Docente::FindOrFail($id);
        //$docente = new User();
        $docente->apellido_nombre = $request->apellido_nombre;
        $docente->ci = $request->ci;
        $docente->edad = $request->edad;
        $docente->direccion = $request->direccion;
        $docente->telefono = $request->telefono;
        $docente->save();

        /*$id = $request->id;
        $carpeta = Carpeta::FindOrFail($id);
        $carpeta->nombre = $request->apellido_nombre;

        $carpeta->ci = $request->ci;

        $carpeta->save();*/



        return redirect()->route('docentes.index')
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
        Docente::destroy($id);
        return redirect()->route('docentes.index')
            ->with('mensaje','Eliminacion Correcta')
            ->with('icono','success');
    }
}
