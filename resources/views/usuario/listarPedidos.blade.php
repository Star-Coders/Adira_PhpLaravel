@php 
use App\Models\PedidoModel;
use App\Http\Controllers\PedidoModelController;
@endphp

@extends('perfil')
@section('listarPedidos')
    <h2>Registrar Algum Pedido Novo</h2>
    <form action="listarPedidos.blade.php" method="post">
        @csrf
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <button type="submit">ENVIAR</button>
    </form>
    @php
        $registro = new PedidoModelController();
        $registro->store(Request $request);
        $registro->id = $request->input('id');
        $registro->save();
        
    @endphp

@endsection