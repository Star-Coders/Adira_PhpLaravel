<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIRA: Aluguel Colaborativo e Economia Compartilhada</title>
</head>
<body>
    <h1>TELA DE HOMEPAGE E CATÁLOGO</h1>
    <main>

        <div class="container">
            @include('catalogo.carouselGeral');
        </div>

        <div class="container">
            @include('catalogo.carouselAvaliados');
        </div>

        <div class="container">
            @include('catalogo.carouselMaisAlugados')
        </div>
    </main>

</body>
</html>