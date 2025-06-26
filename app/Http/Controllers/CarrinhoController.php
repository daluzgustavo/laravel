<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }

    public function adicionar($id)
    {
        $produto = Produto::findOrFail($id);
        $carrinho = session()->get('carrinho', []);

            $carrinho[$id] = [
                'nome' => $produto['nome'],
                'preco' => $produto['preco'],
                'descricao' => $produto['descricao'],
                'imagem' => $produto['imagem'],
            ];

        session()->put('carrinho', $carrinho);

        return redirect('/carrinho');
    }

    public function remover($id)
    {
        $carrinho = session()->get('carrinho', []);

        if (isset($carrinho[$id])) {
            unset($carrinho[$id]);
            session(['carrinho' => $carrinho]);
        }

        return redirect('/carrinho')->with('success', 'Produto removido.');
    }}