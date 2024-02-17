<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Product</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-warning">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Devolução de Pedido</h4>
        </div>
        <div class="card-body">
          <form action="processar_devolucao.php" method="POST">
          <div class="form-group">
              <label for="numero_pedido">Número do Pedido:</label>
              <select class="form-control" id="numero_pedido" name="numero_pedido" required>
                <option value="">Selecione o Número do Pedido</option>
                <option value="10001">10001</option>
                <option value="10004">10004</option>
                <option value="10005">10005</option>
                <!-- Adicionar select com os números de pedidos do usuário-->
              </select>
            </div>
            <div class="form-group">
              <label for="motivo_devolucao">Escreva o Motivo da Devolução:</label>
              <textarea class="form-control" id="motivo_devolucao" name="motivo_devolucao" rows="3" required></textarea>
            </div>
          
            

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                    <button type="button" class="btn btn-danger">Voltar</button>
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
