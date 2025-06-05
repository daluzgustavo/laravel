<?php

use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::get('/autenticar', [AutenticaController::class, 'index'])->name('autentica');

Route::post('/autenticar/gravar', [AutenticaController::class, 'gravar'])->name('autentica.gravar');

Route::get('/autenticar/login', [AutenticaController::class, 'login'])->name('autentica.login');

Route::post('/autenticar/login', [AutenticaController::class, 'login']);

Route::resource('produtos', ProdutosController::class);

require __DIR__.'/auth.php';