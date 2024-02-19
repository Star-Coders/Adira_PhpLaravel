<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Faturamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    </head>
<body class="bg-warning bg-gradient">
    @include('layouts.admin.nav')

    <main>

        <div class="container vh-100">
            <div class="row justify-content-center align-items-center h-75">
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="container mt-5">
            <h2>Resumo do Pedido</h2>
        <ul>
            <li>Item 1 - Preço: R$ XX.XX</li>
            <li>Item 2 - Preço: R$ XX.XX</li>
        </ul>
    </div>
    <div>
        <h2>Detalhes de Cobrança</h2>
        <form action="/processar_pagamento" method="POST" class="form-control form-horizontal input-lg">
            @csrf
            <div class="form-group">

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">

                <label for="numero_cartao">Número do Cartão:</label>
                <input type="text" id="numero_cartao" name="numero_cartao" required>
            </div>

            <div class="form-group">

                <label for="validade_cartao">Validade:</label>
                <input type="text" id="validade_cartao" name="validade_cartao" required>
            </div>

            <div class="form-group">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>

            <div class="form-group">

                <button type="submit">Pagar</button>
            </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
