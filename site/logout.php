<?php
session_start();
session_unset();
session_destroy();

header("Location: login.php?logout=1"); // Redireciona para a página de login
exit();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <title>Logout - Series Flow</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font-family: "Creepster", system-ui;
            font-size: 22px;
            color: white;
            background-image: linear-gradient(to right, rgb(33, 33, 36), rgb(1, 79, 247));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .logout-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            width: 400px;
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .logout-container h2 {
            margin-bottom: 20px;
            color: #ffffff;
        }

        .logout-container p {
            margin-bottom: 20px;
        }

        .logout-container a {
            display: inline-block;
            width: 100%;
            padding: 15px;
            background-color: #1E90FF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        .logout-container a:hover {
            background-color: #1C86EE;
        }
    </style>
</head>
<body>

<div class="logout-container">
    <h2>Logout realizado com sucesso!</h2>
    <p>Você saiu da sua conta.</p>
    <a href="site/login.php">Voltar ao Login</a>
</div>

</body>
</html>
