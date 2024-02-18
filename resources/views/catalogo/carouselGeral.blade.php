
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
$statement = $pdo->prepare('SELECT id,fotografia,categoria,descricao FROM itens ORDER BY RAND() LIMIT 77');
$statement->execute();


  $carousel = []; $i=0;

  while($cardinfo = $statement->fetchAll(PDO::FETCH_ASSOC)){
    
    $carousel[$i] = $cardinfo;
    $i++;
  }
@endphp

<div id="carouselGeral" class="carousel slide">
  <div class="carousel-inner">

    @for($i=0; $i<sizeof($carousel); $i++)

      @foreach($carousel[$i] as $card)
        @php $active = ($i == 0)? 'active' : ''; @endphp

        <div class="carousel-item @php echo $active @endphp">
          <div class="card" style="width: 18rem;">
            <img src="@php echo $card['fotografia'] @endphp" class="card-img-top" alt="Produto para alugar.">
            <div class="card-body">
              <h5 class="card-title">@php echo $card['categoria']; @endphp</h5>
              <p class="card-text">@php echo $card['descricao']; @endphp</p>
              <a href="{{route('produtos.solicitar-produto', $card['id'])}}" class="btn btn-primary"><strong>QUERO ALUGAR</strong></a>
            </div>
          </div>
        </div>
      @endforeach
    @endfor
      
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>