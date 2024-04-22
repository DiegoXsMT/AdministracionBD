<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\RendimientoController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mercado_actual', function () {
    return view('mercado_actual');
});
Route::get('/historial', function () {
    return view('historial.index');
});
Route::get('/historial_ventas', function () {
    return view('historial.historial');
});

Route::get('/inversiones', function () {
    return view('inversiones.index');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('capital', [App\Http\Controllers\RendimientoController::class,'index'])->name('rendimiento.index');



Route::resource('rendimiento', RendimientoController::class)->only(['index', 'create', 'store']);

Route::resource('empresas', EmpresaController::class)->only(['index', 'create', 'store']);
