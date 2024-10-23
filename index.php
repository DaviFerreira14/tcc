<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-message {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .welcome-message h1 {
            margin: 0;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
    // Inicia a sessão
    session_start();

    // Define uma variável de sessão para o nome do usuário
    $_SESSION['username'] = "Visitante"; // Você pode alterar isso conforme necessário

    // Verifica se o nome de usuário está definido
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<div class='welcome-message'><h1>Bem-vindo, " . htmlspecialchars($username) . "!</h1></div>";
    } else {
        echo "<div class='welcome-message'><h1>Bem-vindo, visitante!</h1></div>";
    }
    ?>
</body>
</html>
