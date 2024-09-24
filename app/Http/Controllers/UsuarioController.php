<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'profesión' => 'required|max:100',
            'ci' => 'required|max:100',
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash:: make($request['password']);
        $usuario->profesión = $request->profesión;
        $usuario->ci = $request->ci;
        $usuario->save();

        return redirect()->route('usuarios.index')
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
        $usuario = User::findOrFail($id);
        return view ('admin.usuarios.show',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view ('admin.usuarios.edit',['usuario'=>$usuario]);
        //return view('admin.usuarios.create');
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
            'name' => 'required|max:100',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profesión' => 'required|max:100',
            'ci' => 'required|max:100',
        ]);

        $usuario = User::FindOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash:: make($request['password']);
        $usuario->profesión = $request->profesión;
        $usuario->ci = $request->ci;
        $usuario->save();

        return redirect()->route('usuarios.index')
            ->with('mensaje','Actualizacion Correcta')
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
        User::destroy($id);
        return redirect()->route('usuarios.index')
            ->with('mensaje','Eliminacion Correcta')
            ->with('icono','success');
    }
    public function registro() {
        return view('auth.registro');
    }

    public function registro_create(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'profesión' => 'required|max:100',
            'ci' => 'required|max:100',
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash:: make($request['password']);
        $usuario->profesión = $request->profesión;
        $usuario->ci = $request->ci;
        $usuario->save();

        Auth::login($usuario);

        return redirect('/')
            ->with('mensaje','Registro correcto')
            ->with('icono','success');
    }
}
