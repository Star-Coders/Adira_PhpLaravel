<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adira: Aluguel Colaborativo e Economia Compartilhada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <style>
        .card{
            display: flex;
            justify-content:space-between;
            margin: 2vh;
            max-width: 39vh;
        }
        .card-text{
            margin-bottom: 52px;
        }

        .card-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        }

    </style>
</head>
<body class="bg-warning bg-gradient">
    @include('layouts.admin.nav')
    <main>

        <div class="container p-4 d-flex align-content-center">
            @include('catalogo.carouselGeral')
        </div>
        
        <div class="container">
            @include('catalogo.carouselAvaliados')
        </div>
        
        <div class="container">
            @include('catalogo.carouselMaisAlugados')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
{{-- <div class="container p-4">
    <h2>Catálogo Geral das Opções Disponíveis para Aluguel</h2>
    @include('catalogo.cardGeral')
</div>
<div class="container p-4">
    <h2>Produtos Mais Bem-Avaliados</h2>
    @include('catalogo.cardAvaliados')
</div>
<div class="container p-4">
    <h2>Produtos Mais Alugados</h2>
    @include('catalogo.cardMaisAlugados')
</div> --}}