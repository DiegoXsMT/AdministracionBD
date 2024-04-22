<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

