<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;

class UsuarioModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = UsuarioModel::all();
        $paginas = UsuarioModel::paginate(11);
        return view('admin/todos-usuarios',[
            'ELVYNGTHON.usuarios'=>$usuarios,
            'ELVYNGTHON.usuarios'=>$paginas
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');

    }

    /**
     * Display the specified resource.
     */
    public function show(UsuarioModel $usuarioModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsuarioModel $usuarioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsuarioModel $usuarioModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsuarioModel $usuarioModel)
    {
        //
    }

    public function perfil(int $id = null) {
        $perfil = 'usuario/perfil/{'.$id.'?}';

        return $perfil;
    }

    public function paginaPerfil(int $id = null, string $perfil, array $find){

        return view($perfil, $find);
    }

}
