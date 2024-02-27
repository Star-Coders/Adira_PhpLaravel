<?php
session_start();
@include("../conexao/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta SQL para verificar as credenciais
    $query = "SELECT id, nome, email, senha FROM usuarios WHERE email = '$email'";
    $resultado = $conexao->query($query);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        // Verificar a senha
        if ($senha == $usuario["senha"]) {
            // Autenticação bem-sucedida
            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];
            header("Location: recuperarSenha.blade.php");
            exit();
        } else {
            $erro = "Senha incorreta.";
        }
    } else {
        $erro = "E-mail não encontrado.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADIRA - Login</title>
    <style>
        body {
            background: linear-gradient(to bottom, #C08D34, #AD7E16); /* Gradiente de dourado para amarelo */
        }


        .login-container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            margin-bottom: 20px;
        }

        .form-container {
            background-color: #D7B466;
            padding: 20px;
            border-radius: 8px;
        }

        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signup-link {
            margin-top: 10px;
            font-size: 14px;
            color: #000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="../imagens/FigJam Basics.png" alt="ADIRA" width="50%">
        </div>
        <div class="form-container">
            <form method="post" action="">
                <input type="text" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <?php if (isset($erro)) echo "<p style='color: red;'>$erro</p>"; ?>
            <a href="{{ cadastrarUsuario }}" class="signup-link">Criar cadastro</a>

        </div>
    </div>
</body>

</html>