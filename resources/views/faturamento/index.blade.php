<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Faturamento</title>
    </head>
<body>
    <div>
        <h2>Resumo do Pedido</h2>
        <ul>
            <li>Item 1 - Preço: R$ XX.XX</li>
            <li>Item 2 - Preço: R$ XX.XX</li>
        </ul>
    </div>
    <div>
        <h2>Detalhes de Cobrança</h2>
        <form action="/processar_pagamento" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="numero_cartao">Número do Cartão:</label>
            <input type="text" id="numero_cartao" name="numero_cartao" required>
            <label for="validade_cartao">Validade:</label>
            <input type="text" id="validade_cartao" name="validade_cartao" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            
            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>
