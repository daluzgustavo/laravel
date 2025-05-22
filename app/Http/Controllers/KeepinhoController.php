<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index() {
        $notas = Nota::all();
        
        return view("keepinho/index", [
            'notas' => $notas,
        ]);
    }

    public function gravar(NotaRequest $request) {
        //Criar uma nota com todos os valoresenviados pelo form. Porém a model fica apenas com os aqueles listados no $fillable
        
        $dados = $request->validated();

        Nota::create($dados);
        return redirect()->route('keep');
    }

    public function editar(Nota $nota, NotaRequest $request) {
        if($request->isMethod('put')){
            $nota = Nota::find($request->id);
            $nota->fill($request->all());
            $nota->save();

            return redirect()->route('keep');
        }

        return view('keepinho.editar', [
            'nota' => $nota,
        ]);
    }

    public function apagar(Nota $nota){
        $nota->delete();
        return redirect()->route('keep');
    }

    public function lixeira(Nota $nota){
        $nota = Nota::onlyTrashed()->get();
        // $notas = Nota::withTrashed();
        return view('keepinho.lixeira', [
            'notas' => $nota,
        ]);
    }

    public function restaurar($nota){
        $nota = Nota::withTrashed()->find($nota);
        $nota->restore();
        return redirect()->route('keep.lixeira')->with('sucesso', 'Nota restaurada com sucesso!');
    }
}
