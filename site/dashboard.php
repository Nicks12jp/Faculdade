<?php
include 'estilizacoes/headerLogin.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?erro=1"); // Redireciona para o login se não estiver autenticado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <title>Bem-vindo</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Creepster", system-ui;
            background-image: url('imagens/halloween_bg.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); 
        }

        h2 {
            font-size: 26px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        nav {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            font-size: 20px;
            margin: 0 10px;
            color: #FFA500; 
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: white;
            transform: scale(1.1); 
        }

        #back {
            margin: 20px 0;
        }

        .voltar {
            color: #FFA500; 
            font-size: 24px;
            transition: color 0.3s;
        }

        .voltar:hover {
            color: white; 
        }

        /* Responsividade */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            nav a {
                font-size: 18px;
            }

            .voltar {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 20px;
            }

            nav a {
                font-size: 16px;
            }

            .voltar {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <div>
        <h1>Login efetuado com sucesso!</h1>
        <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    </div>

    <nav id="back">
        <a href="index.php" class="voltar">- Voltar à página inicial -</a>
    </nav>
</body>
</html>
