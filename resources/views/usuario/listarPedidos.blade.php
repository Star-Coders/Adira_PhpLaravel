@php 
use App\Models\PedidoModel;
use App\Http\Controllers\PedidoModelController;
@endphp

@extends('perfil')
@section('pedir-aluguel')
    <div>
        @yield('solicitar-produto')
    </div>
    @php
        $registro = new PedidoModelController();
        $registro->store(Request $request);
        $registro->id = $request->input('id');
        $registro->save();
        
    @endphp

@endsection

@section('listar-pedidos')
    @php
        $usuario_id = PedidoModel::find('usuario_id');
        lista($usuario_id);
    @endphp
    <table class='table'>
    @foreach ($listar as $l)
        <tr>{{$l->id}}</tr>
    @endforeach
    </table> 
@endsection