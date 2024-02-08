{{-- SQL SELECT para selecionar os dados
$exemplo = $dbConecta->prepare('SELECT id,fotografia,categoria,descricao FROM itens ORDER BY RAND() LIMIT 11');
$exemplo->execute(); --}}

{{-- $carousel = []; $i=0;

@while($cardinfo = $exemplo->fetchAll(PDO::FETCH_ASSOC))
    @php
        $carousel[$i] = $cardinfo;
        $i++;
    @endphp
@endwhile
    --}}
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">

    <?php

    for($i=0; $i<sizeof($carousel); $i++){

        foreach($carousel[$i] as $card){
        $active = ($i == 0)? 'active' : '';
    ?>

      <div class="carousel-item <?php echo $active ?>">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $card['fotografia'] ?>" class="card-img-top" alt="Produto para alugar.">
            <div class="card-body">
              <h5 class="card-title"><?php echo $card['categoria']; ?></h5>
              <p class="card-text"><?php echo $card['descricao']; ?></p>
              <a href="solicitar-produto" class="btn btn-primary"><strong>QUERO ALUGAR</strong></a>
            </div>
          </div>
      </div>
    <?php }
    }
    ?>
      
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