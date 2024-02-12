<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAINEL DO ADMINISTRADOR DO SISTEMA</title>
</head>
<body>
    <h1>PAINEL DO ADMINISTRADOR DO SISTEMA</h1>
    <main>
        <div>
            @include('admin.todosUsuarios')
        </div>
        <div>
            @include('admin.todosPedidos')
        </div>
        <div>
            <label for="produtos">Listagem de todos os produtos</label>
            <button type="submit" name="produtos">Clique para conferir</button>
        </div>

    </main>
</body>
</html>