@extends('painel')
@section('usuarios')
    <h2>Registrar Algum Usuário Novo</h2>
    <form action="todosUsuarios" method="post">
        @csrf
        <label for="nome">Nome completo: </label>
        <input type="text" name="nome" id="nome">
        <button type="submit">ENVIAR</button>
    </form>
    @php
        @registro = new UsuarioModel();
        @registro->nome_pessoal = $request->input('nome');
        @registro->save();
        
    @endphp
    <h2>Lista de Usuários do Sistema</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME COMPLETO</th>
                    <th>CPF</th>
                    <th>E-MAIL</th>
                    <th>ENDEREÇO</th>
                    <th>SENHA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nome_pessoal}}</td>
                    <td>{{$usuario->cpf}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->endereco}}</td>
                    <td>{{$usuario->senha}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection