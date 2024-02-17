@extends('usuario.perfil')
@section('title', 'Faça o seu pedido')
@section('solicitar-produto')

<form method="post" action="{{ route('listar-pedidos', $itens->id) }}">

    @csrf

    <input type="text" name="nome" placeholder="Seu Nome" value="{{ old('nome') }}">
    @error('nome')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="email" name="email" placeholder="Seu E-mail" value="{{ old('email') }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="date" name="data_inicio_contrato" placeholder="Data de Início" value="{{ old('data_inicio_contrato') }}">
    @error('data_inicio_contrato')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="date" name="data_prevista_termino" placeholder="Data de Término" value="{{ old('data_prevista_termino') }}">
    @error('data_prevista_termino')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Enviar Solicitação</button>

</form>

@endsection
