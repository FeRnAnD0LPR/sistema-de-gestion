<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HojaController;
use App\Http\Controllers\VidaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('principal');
});

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

//Route::get('/', function () { return view('admin'); });//////

Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('auth');

//rutas de docente
Route::get('/docentes', 'DocenteController@index')->name('docentes.index')->middleware('auth');
Route::get('/docentes/create', 'DocenteController@create')->name('docentes.create')->middleware('auth');
Route::post('/docentes', 'DocenteController@store')->name('docentes.store')->middleware('auth');
//mostrar
Route::get('/docentes/{id}', 'DocenteController@show')->name('docentes.show')->middleware('auth');
//editar
Route::get('/docentes/{id}/edit', 'DocenteController@edit')->name('docentes.edit')->middleware('auth');
Route::put('/docentes/{id}', 'DocenteController@update')->name('docentes.update')->middleware('auth');
//delete
Route::delete('/docentes/{id}', 'DocenteController@destroy')->name('docentes.destroy')->middleware('auth');


//rutas de estudiante
Route::get('/estudiantes', 'EstudianteController@index')->name('estudiantes.index')->middleware('auth');
Route::get('/estudiantes/create', 'EstudianteController@create')->name('estudiantes.create')->middleware('auth');
Route::post('/estudiantes', 'EstudianteController@store')->name('estudiantes.store')->middleware('auth');
//mostrar
Route::get('/estudiantes/{id}', 'EstudianteController@show')->name('estudiantes.show')->middleware('auth');
//editar
Route::get('/estudiantes/{id}/edit', 'EstudianteController@edit')->name('estudiantes.edit')->middleware('auth');
Route::put('/estudiantes/{id}', 'EstudianteController@update')->name('estudiantes.update')->middleware('auth');
//delete
Route::delete('/estudiantes/{id}', 'EstudianteController@destroy')->name('estudiantes.destroy')->middleware('auth');



//rutas de usuarios
Route::get('/usuarios', 'UsuarioController@index')->name('usuarios.index')->middleware('auth');
Route::get('/usuarios/create', 'UsuarioController@create')->name('usuarios.create')->middleware('auth');
Route::post('/usuarios', 'UsuarioController@store')->name('usuarios.store')->middleware('auth');
//mostrar
Route::get('/usuarios/{id}', 'UsuarioController@show')->name('usuarios.show')->middleware('auth');
//editar
Route::get('/usuarios/{id}/edit', 'UsuarioController@edit')->name('usuarios.edit')->middleware('auth');
Route::put('/usuarios/{id}', 'UsuarioController@update')->name('usuarios.update')->middleware('auth');
//delete
Route::delete('/usuarios/{id}', 'UsuarioController@destroy')->name('usuarios.destroy')->middleware('auth');

//notas
Route::get('/notas', 'NotaController@index')->name('notas.index')->middleware('auth');
//Route::get('/notas/create', 'NotaController@create')->name('notas.create')->middleware('auth');
Route::post('/notas', 'NotaController@store1')->name('notas.store1')->middleware('auth');
Route::post('/notas', 'NotaController@store2')->name('notas.store2')->middleware('auth');
//mostrar
Route::get('/notas/{id}', 'NotaController@show')->name('notas.show')->middleware('auth');
//editar
Route::get('/notas/{id}/edit', 'NotaController@edit')->name('notas.edit')->middleware('auth');
Route::put('/notas/{id}', 'NotaController@update')->name('notas.update')->middleware('auth');
//delete
Route::delete('/notas/{id}', 'NotaController@destroy')->name('notas.destroy')->middleware('auth');


//registro
Route::get('/registro', 'UsuarioController@registro')->name('admin.index');
Route::post('/registro', 'UsuarioController@registro_create')->name('registro');

//curriculum
// Route::get('/hojavida', 'HojavidaController@index')->name('hojavida.index')->middleware('auth');
// Route::get('/hojavida/create', 'HojavidaController@create')->name('hojavida.create')->middleware('auth');
// Route::post('/docentes', 'DocenteController@store')->name('docentes.store')->middleware('auth');
// //mostrar
// Route::get('/docentes/{id}', 'DocenteController@show')->name('docentes.show')->middleware('auth');
// //editar
// Route::get('/docentes/{id}/edit', 'DocenteController@edit')->name('docentes.edit')->middleware('auth');
// Route::put('/docentes/{id}', 'DocenteController@update')->name('docentes.update')->middleware('auth');
// //delete
// Route::delete('/docentes/{id}', 'DocenteController@destroy')->name('docentes.destroy')->middleware('auth');

//formularios
Route::get('/formulario/paso1', 'FormularioController@mostrarPaso1')->name('formulario.paso1')->middleware('auth');
Route::post('/formulario/paso1', 'FormularioController@guardarPaso1')->name('formulario.paso1')->middleware('auth');

Route::get('/formulario/paso2', 'FormularioController@mostrarPaso2')->name('formulario.paso2')->middleware('auth');
Route::post('/formulario/paso2', 'FormularioController@guardarPaso2')->name('formulario.paso2')->middleware('auth');

Route::get('/formulario/paso3', 'FormularioController@mostrarPaso3')->name('formulario.paso3')->middleware('auth');
Route::post('/formulario/paso3', 'FormularioController@guardarPaso3')->name('formulario.paso3')->middleware('auth');

Route::get('/formulario/paso4', 'FormularioController@mostrarPaso4')->name('formulario.paso4')->middleware('auth');
Route::post('/formulario/paso4', 'FormularioController@guardarPaso4')->name('formulario.paso4')->middleware('auth');

Route::get('/formulario/paso5', 'FormularioController@mostrarPaso5')->name('formulario.paso5')->middleware('auth');
Route::post('/formulario/paso5', 'FormularioController@guardarPaso5')->name('formulario.paso5')->middleware('auth');

Route::get('/formulario/paso6', 'FormularioController@mostrarPaso6')->name('formulario.paso6')->middleware('auth');
Route::post('/formulario/paso6', 'FormularioController@guardarPaso6')->name('formulario.paso6')->middleware('auth');

Route::get('/formulario/paso7', 'FormularioController@mostrarPaso7')->name('formulario.paso7')->middleware('auth');
Route::post('/formulario/paso7', 'FormularioController@guardarPaso7')->name('formulario.paso7')->middleware('auth');

Route::get('/formulario/paso8', 'FormularioController@mostrarPaso8')->name('formulario.paso8')->middleware('auth');
Route::post('/formulario/paso8', 'FormularioController@guardarPaso8')->name('formulario.paso8')->middleware('auth');

Route::get('/formulario/paso9', 'FormularioController@mostrarPaso9')->name('formulario.paso9')->middleware('auth');
Route::post('/formulario/paso9', 'FormularioController@guardarPaso9')->name('formulario.paso9')->middleware('auth');

Route::get('/formulario/paso10', 'FormularioController@mostrarPaso10')->name('formulario.paso10')->middleware('auth');
Route::post('/formulario/paso10', 'FormularioController@guardarPaso10')->name('formulario.paso10')->middleware('auth');

Route::get('/formulario/paso11', 'FormularioController@mostrarPaso11')->name('formulario.paso11')->middleware('auth');
Route::post('/formulario/paso11', 'FormularioController@guardarPaso11')->name('formulario.paso11')->middleware('auth');

Route::get('/formulario/paso12', 'FormularioController@mostrarPaso12')->name('formulario.paso12')->middleware('auth');
Route::post('/formulario/paso12', 'FormularioController@guardarPaso12')->name('formulario.paso12')->middleware('auth');

Route::get('/formulario/finalizado', 'FormularioController@finalizado')->name('formulario.finalizado')->middleware('auth');

//formulas
Route::get('/formula/paso1', 'FormulaController@mostrarPaso1')->name('formula.paso1')->middleware('auth');
Route::post('/formula/paso1', 'FormulaController@guardarPaso1')->name('formula.paso1')->middleware('auth');

Route::get('/formula/paso2', 'FormulaController@mostrarPaso2')->name('formula.paso2')->middleware('auth');
Route::post('/formula/paso2', 'FormulaController@guardarPaso2')->name('formula.paso2')->middleware('auth');

Route::get('/formula/paso3', 'FormulaController@mostrarPaso3')->name('formula.paso3')->middleware('auth');
Route::post('/formula/paso3', 'FormulaController@guardarPaso3')->name('formula.paso3')->middleware('auth');

Route::get('/formula/paso4', 'FormulaController@mostrarPaso4')->name('formula.paso4')->middleware('auth');
Route::post('/formula/paso4', 'FormulaController@guardarPaso4')->name('formula.paso4')->middleware('auth');

Route::get('/formula/paso5', 'FormulaController@mostrarPaso5')->name('formula.paso5')->middleware('auth');
Route::post('/formula/paso5', 'FormulaController@guardarPaso5')->name('formula.paso5')->middleware('auth');

Route::get('/formula/paso6', 'FormulaController@mostrarPaso6')->name('formula.paso6')->middleware('auth');
Route::post('/formula/paso6', 'FormulaController@guardarPaso6')->name('formula.paso6')->middleware('auth');

Route::get('/formula/paso7', 'FormulaController@mostrarPaso7')->name('formula.paso7')->middleware('auth');
Route::post('/formula/paso7', 'FormulaController@guardarPaso7')->name('formula.paso7')->middleware('auth');

Route::get('/formula/finalizado', 'FormulaController@finalizado')->name('formula.finalizado')->middleware('auth');


//curriculum docentes
Route::get('/vidas', 'VidaController@index')->name('vidas.index')->middleware('auth');
Route::post('/vidas', 'VidaController@store')->name('vidas.store')->middleware('auth');

//curriculum estudiantes
Route::get('/hojas', 'HojaController@index')->name('hojas.index')->middleware('auth');
Route::post('/hojas', 'HojaController@store')->name('hojas.store')->middleware('auth');



