<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->senha),
            'telefone' => $request->telefone,
            'cep' => $request->cep,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
        ]);

        // Armazena uma mensagem de sessão flash para ser usada uma única vez
        return redirect('/login')->with('success', 'Registro inserido com sucesso');
    }
}
