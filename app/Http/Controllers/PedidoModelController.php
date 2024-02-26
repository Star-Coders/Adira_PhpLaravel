<?php

namespace App\Http\Controllers;

use App\Models\PedidoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = PedidoModel::all();
        $paginas = PedidoModel::paginate(11);
        return view("admin/todos-pedidos",[
            "ELVYNGTHON.pedidos"=>$pedidos,
            "ELVYNGTHON.pedidos"=>$paginas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("solicitarProduto");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inserir = $request->all();

        DB::table("itens")->insert($inserir);

        return redirect()->route('listar-pedidos');
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

    public function lista($usuario_id){

        $listando = PedidoModel::where("usuario_id");
        $paginaLista = PedidoModel::paginate(11);

        return $listar = [$listando, $paginaLista];

    }

}
