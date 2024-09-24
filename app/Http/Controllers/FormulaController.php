<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pasoo1;
use App\Pasoo2;
use App\Pasoo3;
use App\Pasoo4;
use App\Pasoo5;
use App\Pasoo6;
use App\Pasoo7;

class FormulaController extends Controller
{
    public function mostrarPaso1()
    {
        return view('admin.formula.paso1');
    }

    public function guardarPaso1(Request $request)
    {
        $request->validate([
            'campo1' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso1 = new Pasoo1();
        $paso1->campo1 = $request->campo1;
        // Asigna más campos según sea necesario
        $paso1->save();

        return redirect()->route('formula.paso2');
    }

    public function mostrarPaso2()
    {
        return view('admin.formula.paso2');
    }

    public function guardarPaso2(Request $request)
    {
        $request->validate([
            'campo2' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso2 = new Pasoo2();
        $paso2->campo2 = $request->campo2;
        // Asigna más campos según sea necesario
        $paso2->save();

        return redirect()->route('formula.paso3');
    }

    public function mostrarPaso3()
    {
        return view('admin.formula.paso3');
    }

    public function guardarPaso3(Request $request)
    {
        $request->validate([
            'campo3' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso3 = new Pasoo3();
        $paso3->campo3 = $request->campo3;
        // Asigna más campos según sea necesario
        $paso3->save();

        return redirect()->route('formula.paso4');
    }

    public function mostrarPaso4()
    {
        return view('admin.formula.paso4');
    }

    public function guardarPaso4(Request $request)
    {
        $request->validate([
            'campo4' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso4 = new Pasoo4();
        $paso4->campo4= $request->campo4;
        // Asigna más campos según sea necesario
        $paso4->save();

        return redirect()->route('formula.paso5');
    }

    public function mostrarPaso5()
    {
        return view('admin.formula.paso5');
    }

    public function guardarPaso5(Request $request)
    {
        $request->validate([
            'campo5' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso5 = new Pasoo5();
        $paso5->campo5= $request->campo5;
        // Asigna más campos según sea necesario
        $paso5->save();

        return redirect()->route('formula.paso6');
    }

    public function mostrarPaso6()
    {
        return view('admin.formula.paso6');
    }

    public function guardarPaso6(Request $request)
    {
        $request->validate([
            'campo6' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso6 = new Pasoo6();
        $paso6->campo6= $request->campo6;
        // Asigna más campos según sea necesario
        $paso6->save();

        return redirect()->route('formula.paso7');
    }

    public function mostrarPaso7()
    {
        return view('admin.formula.paso7');
    }

    public function guardarPaso7(Request $request)
    {
        $request->validate([
            'campo7' => 'required',
            // Agrega más reglas de validación según sea necesario
        ]);

        $paso7 = new Pasoo7();
        $paso7->campo7 = $request->campo7;
        // Asigna más campos según sea necesario
        $paso7->save();

        // Redirige al siguiente paso o finaliza el formulario
        return redirect()->route('formula.finalizado');
    }

        public function finalizado()
    {
        return view('admin.formula.finalizado');
    }
}
