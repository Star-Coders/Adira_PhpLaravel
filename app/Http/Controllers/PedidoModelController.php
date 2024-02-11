<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use Illuminate\Http\Request;

class PedidoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = PedidoModel::all();
        $paginas = PedidoModel::paginate(11);
        return view('admin/todos-pedidos',[
            'ELVYNGTHON.pedidos'=>$pedidos,
            'ELVYNGTHON.pedidos'=>$paginas
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
        $id = $request->input('id');
    }

    /**
     * Display the specified resource.
     */
    public function show(PedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PedidoModel $pedidoModel)
    {
        //
    }
}
