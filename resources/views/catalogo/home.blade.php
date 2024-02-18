<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adira: Aluguel Colaborativo e Economia Compartilhada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body class="bg-warning bg-gradient">
    @include('layouts.admin.nav')
    <main>

        <div class="container p-4">
            @include('catalogo.carouselGeral')
        </div>

        <div class="container">
            @include('catalogo.carouselAvaliados')
        </div>

        <div class="container">
            @include('catalogo.carouselMaisAlugados')
        </div>
    </main>

</body>
</html>