<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('adicionar_produto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric|min:0',
        ]);

        Produto::create($request->only(['nome', 'descricao', 'preco']));

        return redirect()->route('adicionar.produto')->with('success', 'Produto adicionado com sucesso!');
    }
}
