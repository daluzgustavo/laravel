<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{valor}', function ($valor) {
    return "você digitou: {$valor}";
});

Route::get('/calc/somar/{x}/{y}', [CalculosController::class, 'somar']);

Route::get('/calc/subtrair/{x}/{y}', [CalculosController::class, 'subtrair']);

Route::get('/calc/quadrado/{x}', [CalculosController::class, 'quadrado']);

Route::prefix('/keep')->group(function () {
    Route::get('/',[KeepinhoController::class,'index'])->name('keep');

    Route::post('/gravar', [KeepinhoController::class, 'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}', [KeepinhoController::class, 'editar'])->name('keep.editar');
    
    Route::put('/editar', [KeepinhoController::class, 'editar'])->name('kepp.editarGravar');

    Route::delete('/apagar/{nota}', [KeepinhoController::class,'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');

    Route::get('/restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');
});

Route::prefix('biblioteca')->group(function () {
    Route::get('/', [BibliotecaController::class, 'index'])->name('biblioteca');

    Route::post('/gravar', [BibliotecaController::class,'gravar'])->name('biblioteca.gravar');

    Route::get('/editar/{livros}', [BibliotecaController::class, 'editar'])->name('biblioteca.editar');

    Route::put('/editar', [BibliotecaController::class, 'editar'])->name('biblioteca.editarGravar');
});