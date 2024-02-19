
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
$statement = $pdo->prepare('SELECT id,fotografia,categoria,descricao FROM itens ORDER BY quantas_vezes DESC LIMIT 11');
$statement->execute();


  $carousel = []; $i=0;

  while($cardinfo = $statement->fetchAll(PDO::FETCH_ASSOC)){
    
    $carousel[$i] = $cardinfo;
    $i++;
  }
@endphp



<div class="row">
    @for($i=0; $i<sizeof($carousel); $i++)

        @foreach($carousel[$i] as $card)

                    <div class="card">
                        {{-- <img src="@php echo $card['fotografia'] @endphp" class="card-img-top" alt="Produto para alugar."> --}}
                        <div class="card-body">
                            <h5 class="card-title">@php echo $card['categoria']; @endphp</h5>
                            <p class="card-text">@php echo $card['descricao']; @endphp</p>
                            <div class="card-footer">

                                <a href="{{route('produtos.solicitar-produto', $card['id'])}}" class="btn btn-primary"><strong>QUERO ALUGAR</strong></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endfor
                </div> 
 