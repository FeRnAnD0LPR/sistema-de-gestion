<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paso1;
use App\Paso2;
use App\Paso3;
use App\Paso4;
use App\Paso5;
use App\Paso6;
use App\Paso7;
use App\Paso8;
use App\Paso9;
use App\Paso10;
use App\Paso11;
use App\Paso12;


class FormularioController extends Controller
{
    public function mostrarPaso1()
    {
        return view('admin.formulario.paso1');
    }

    public function guardarPaso1(Request $request)
    {
        $request->validate([
            'campo1' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso1 = new Paso1();
        $paso1->campo1 = $request->campo1;
        // Asigna más campos según sea necesario
        $paso1->save();

        return redirect()->route('formulario.paso2');
    }

    public function mostrarPaso2()
    {
        return view('admin.formulario.paso2');
    }

    public function guardarPaso2(Request $request)
    {
        $request->validate([
            'campo2' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso2 = new Paso2();
        $paso2->campo2 = $request->campo2;
        // Asigna más campos según sea necesario
        $paso2->save();

        return redirect()->route('formulario.paso3');
        
    }

    public function mostrarPaso3()
    {
        return view('admin.formulario.paso3');
    }

    public function guardarPaso3(Request $request)
    {
        $request->validate([
            'campo3' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso3 = new Paso3();
        $paso3->campo3 = $request->campo3;
        // Asigna más campos según sea necesario
        $paso3->save();

        return redirect()->route('formulario.paso4');
    }

    public function mostrarPaso4()
    {
        return view('admin.formulario.paso4');
    }

    public function guardarPaso4(Request $request)
    {
        $request->validate([
            'campo4' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso4 = new Paso4();
        $paso4->campo4= $request->campo4;
        // Asigna más campos según sea necesario
        $paso4->save();

        return redirect()->route('formulario.paso5');
    }

    public function mostrarPaso5()
    {
        return view('admin.formulario.paso5');
    }

    public function guardarPaso5(Request $request)
    {
        $request->validate([
            'campo5' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso5 = new Paso5();
        $paso5->campo5= $request->campo5;
        // Asigna más campos según sea necesario
        $paso5->save();

        return redirect()->route('formulario.paso6');
    }

    public function mostrarPaso6()
    {
        return view('admin.formulario.paso6');
    }

    public function guardarPaso6(Request $request)
    {
        $request->validate([
            'campo6' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso6 = new Paso6();
        $paso6->campo6= $request->campo6;
        // Asigna más campos según sea necesario
        $paso6->save();

        return redirect()->route('formulario.paso7');
    }

    public function mostrarPaso7()
    {
        return view('admin.formulario.paso7');
    }

    public function guardarPaso7(Request $request)
    {
        $request->validate([
            'campo7' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso7 = new Paso7();
        $paso7->campo7= $request->campo7;
        // Asigna más campos según sea necesario
        $paso7->save();

        return redirect()->route('formulario.paso8');
    }

    public function mostrarPaso8()
    {
        return view('admin.formulario.paso8');
    }

    public function guardarPaso8(Request $request)
    {
        $request->validate([
            'campo8' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso8 = new Paso8();
        $paso8->campo8= $request->campo8;
        // Asigna más campos según sea necesario
        $paso8->save();

        return redirect()->route('formulario.paso9');
    }

    public function mostrarPaso9()
    {
        return view('admin.formulario.paso9');
    }

    public function guardarPaso9(Request $request)
    {
        $request->validate([
            'campo9' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso9 = new Paso9();
        $paso9->campo9= $request->campo9;
        // Asigna más campos según sea necesario
        $paso9->save();

        return redirect()->route('formulario.paso10');
    }

    public function mostrarPaso10()
    {
        return view('admin.formulario.paso10');
    }

    public function guardarPaso10(Request $request)
    {
        $request->validate([
            'campo10' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso10 = new Paso10();
        $paso10->campo10= $request->campo10;
        // Asigna más campos según sea necesario
        $paso10->save();

        return redirect()->route('formulario.paso11');
    }

    public function mostrarPaso11()
    {
        return view('admin.formulario.paso11');
    }

    public function guardarPaso11(Request $request)
    {
        $request->validate([
            'campo11' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso11 = new Paso11();
        $paso11->campo11= $request->campo11;
        // Asigna más campos según sea necesario
        $paso11->save();

        return redirect()->route('formulario.paso12');
    }

    public function mostrarPaso12()
    {
        return view('admin.formulario.paso12');
    }

    public function guardarPaso12(Request $request)
    {
        $request->validate([
            'campo12' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso12 = new Paso12();
        $paso12->campo12 = $request->campo12;
        // Asigna más campos según sea necesario
        $paso12->save();

        // Redirige al siguiente paso o finaliza el formulario
        return redirect()->route('formulario.finalizado');
    }

        public function finalizado()
    {
        return view('admin.formulario.finalizado');
    }
}
