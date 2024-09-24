<?php

namespace App\Http\Controllers;

use App\User;
use App\Docente;
use App\Estudiante;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $usuarios = User::all();
        $docentes = Docente::all();
        $estudiantes = Estudiante::all();
        
        return view('admin.index',['usuarios'=>$usuarios, 'docentes'=>$docentes, 'estudiantes'=>$estudiantes]);
    }
}
