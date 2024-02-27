<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("catalogo/home", [
            "catalogo" => ProdutoModel::inRandomOrder("id")->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProdutoModel $produtoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdutoModel $produtoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdutoModel $produtoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdutoModel $produtoModel)
    {
        //
    }

    public function usuarioId(){

        $usuario_id = ProdutoModel::find("usuario_id");

        return $usuario_id;

    }

    public function solicitar(){

        $id = null;
        $solicitar = ProdutoModel::where("id", $id);

        return view("produtos/solicitarProduto", [
            "solicitar" => $solicitar
        ]);
    }
}
