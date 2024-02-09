@php
// Definir as variáveis de ambiente
$dbConnection = env('DB_CONNECTION');
$dbHost = env('DB_HOST');
$dbName = env('DB_DATABASE');
$dbUsername = env('DB_USERNAME');
$dbPassword = env('DB_PASSWORD');

// Instanciar o objeto PDO
$pdo = new PDO(
    "$dbConnection:host=$dbHost;dbname=$dbName",
    $dbUsername,
    $dbPassword
);

// Busca no database
$statement = $pdo->prepare('SELECT * FROM usuarios');
$statement->execute();

$usuarios=[]; $i=0;

while($linha = $statement->fetchAll(PDO::FETCH_ASSOC)){
    
    $usuarios[$i] = $linha;
    $i++;
  }

@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN: Lista de Todos os Usuários do Sistema</title>
</head>
<body>
    <main>

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
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['nome_pessoal']}}</td>
                    <td>{{$usuario['cpf']}}</td>
                    <td>{{$usuario['email']}}</td>
                    <td>{{$usuario['endereco']}}</td>
                    <td>{{$usuario['senha']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>