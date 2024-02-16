<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil de Usuário</title>
</head>
<body>
    <main>
        <h1>Dados do usuario</h1>
        @php
            $dados = UsuarioModelController::find('id');
            $info = function($dados){
                $nome = $dados->nome_pessoal;
                $cpf = $dados->cpf;
                $email = $dados->email;
                $endereco = $dados->endereco;

                $array = [$nome, $cpf, $email, $endereco];

                return $array
            }
            $usuario = $info();
        @endphp
        <table class='table'>
            <thead>
                <td>Nome Completo</td>
                <td>CPF</td>
                <td>E-mail</td>
                <td>Endereço</td>
            </thead>
            <tbody>
                @foreach ($usuario as $u)
                <td>
                   {{$u->nome}} 
                </td>
                <td>
                    {{$u->cpf}} 
                 </td>
                 <td>
                    {{$u->email}} 
                 </td>
                 <td>
                    {{$u->endereco}} 
                 </td>                    
                @endforeach
            </tbody>
        </table>

        <div>
            @include('usuario.listarPedidos')
        </div>

        <div>
            <label for="produtos">Lista dos seus produtos</label>
            <button type="submit" name="produtos" href="/listarProdutos">Clique para conferir</button>
        </div>
    </main>
</body>
</html>