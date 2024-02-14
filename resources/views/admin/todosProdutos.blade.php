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
$statement = $pdo->prepare('SELECT * FROM itens');
$statement->execute();

$produtos=[]; $i=0;

while($linha = $statement->fetchAll(PDO::FETCH_ASSOC)){
    
    $produtos[$i] = $linha;
    $i++;
  }

@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN: Lista de Todos os Produtos Catalogados no Sistema</title>
</head>
<body>
    <main>
        <h2>Registrar Algum Produto Novo</h2>
        <form action="todosProdutos.blade.php" method="post">
        @csrf
        <label for="categoria">Categoria: </label>
        <input type="text" name="categoria" id="categoria">
        <button type="submit">ENVIAR</button>
        </form>

        @php
        $categoria = filter_input(INPUT_POST,'categoria', FILTER_SANITIZE_STRING);
        $insert = $pdo->prepare('
        INSERT INTO itens
        (categoria)
        VALUES
        ({$categoria})');
        $insert->execute();
        @endphp 

        <table>
            <thead>
                <tr>
                    <th>ID DO PRODUTO</th>
                    <th>ID DO USUÁRIO</th>
                    <th>CATEGORIA DO PRODUTO</th>
                    <th>DESCRIÇÃO DO PRODUTO</th>
                    <th>FOTOGRAFIA DO PRODUTO</th>
                    <th>DATA DA INCLUSÃO NO CATÁLOGO</th>
                    <th>DATA DA ÚLTIMA ATUALIZAÇÃO</th>
                    <th>DISPONIBILIDADE PARA ALUGUEL</th>
                    <th>PREÇO DA DIÁRIA DO ALUGUEL</th>
                    <th>QUANTIDADE MÍNIMA DE DIAS PARA ALUGAR</th>
                    <th>QUANTIDADE DE DIAS DA DURAÇÃO DO ALUGUEL</th>
                    <th>VALOR DO PAGAMENTO:R$</th>
                    <th>DATA DO PAGAMENTO EFETUADO</th>
                    <th>DATA DE INÍCIO DO ALUGUEL</th>
                    <th>DATA DA CONCLUSÃO DO ALUGUEL</th>
                    <th>DATA PREVISTA PARA O TÉRMINO DO ALUGUEL</th>
                    <th>DATA DA EFETUAÇÃO DA DEVOLUÇÃO</th>
                    <th>AVALIAÇÃO:NOTA</th>
                    <th>QUANTIDADE DE ALUGUEIS DO PRODUTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->usuario_id}}</td>
                    <td>{{$produto->categoria}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->fotografia}}</td>
                    <td>{{$produto->data_catalogado}}</td>
                    <td>{{$produto->data_atualizado}}</td>
                    <td>{{$produto->disponivel}}</td>
                    <td>{{$produto->preco_dia}}</td>
                    <td>{{$produto->minimo_dias}}</td>
                    <td>{{$produto->quantos_dias}}</td>
                    <td>{{$produto->pagamento}}</td>
                    <td>{{$produto->pagamento_dia}}</td>
                    <td>{{$produto->data_inicio_contrato}}</td>
                    <td>{{$produto->data_conclusao_contrato}}</td>
                    <td>{{$produto->data_prevista_termino}}</td>
                    <td>{{$produto->data_efetiva_devolucao}}</td>
                    <td>{{$produto->avaliado_nota}}</td>
                    <td>{{$produto->quantas_vezes}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>

@php
$statement=null;
