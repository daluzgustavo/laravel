<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index() {
        $livros = Livro::all();
        
        return view("biblioteca/index", [
            'livros' => $livros,
        ]);
    }

    public function gravar(Request $request) {
        //Criar uma nota com todos os valoresenviados pelo form. Porém a model fica apenas com os aqueles listados no $fillable
        Livro::create($request->all());
        return redirect()->route('biblioteca');
    }

    public function editar(Livro $livros, Request $request) {
        if($request->isMethod('put')){
            $livros = Livro::findOrFail($request->id);
            $livros->titulo = $request->titulo;
            $livros->autor = $request->autor;
            $livros->ISBN = $request->ISBN;
            $livros->data_publicacao = $request->data_publicacao;
            $livros->save();

            return redirect()->route('biblioteca');
        }
        
        return view('biblioteca.editar', [
            'livros' => $livros,
        ]);
    }
}
