<?php
session_start(); 
$usuarioLogado = isset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Séries Flow (Séries)</title>

    <style>
        /* Estilo Halloween */
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
            color: #ff7518; 
            background-image: linear-gradient(to right, #1c1c1e, #3f0f3f); 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            overflow-x: hidden;
        }

        p {
            text-align: center;
            margin: 30px auto;
            width: 80%;
            max-width: 600px;
            color: #ff7518;
        }

        h1, h2, h3 {
            color: #ff7518;
            text-align: center;
            text-shadow: 2px 2px 5px #000; 
        }

        .img-padrao {
            text-align: center;
            margin: 20px 0;
        }

        .img-padrao .logo {
            width: 400px;
            max-width: 90%;
            height: auto;
            filter: drop-shadow(0 0 10px #ff7518); 
            animation: flicker 2s infinite; /* Animação de piscada */
        }

        /* Animação de piscada */
        @keyframes flicker {
            0%, 18%, 22%, 25%, 53%, 57%, 100% {
                opacity: 1;
            }
            20%, 24%, 55% {
                opacity: 0.8;
            }
            21%, 23%, 56% {
                opacity: 0.6;
            }
        }

        nav {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 800px;
            padding: 10px;
            position: relative;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: space-around;
            width: 100%;
            max-width: 800px;
            padding: 10px;
        }

        nav ul li {
            display: flex;
            align-items: center;
        }

        nav ul a {
            color: #ff7518;
            text-decoration: none;
            font-size: 30px;
            margin: 0 15px;
            transition: color 0.3s;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        nav ul a:hover {
            color: #a020f0; 
        }

        footer {
            background-color: rgba(28, 12, 44, 0.8);
            text-align: center;
            padding: 10px;
            width: 100%;
            color: #ff7518;
        }

        .login-container {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 5px;
        }

        .login-container span {
            font-size: 20px;
            margin-bottom: 5px;
            color: #ff7518;
        }

        .login-container a {
            color: #ff7518;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .login-container a:hover {
            color: #a020f0;
        }

        .login-icon {
            font-size: 24px;
        }

        /* Responsividade para telas menores */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
                padding: 0;
            }

            nav ul a {
                font-size: 24px;
                margin: 10px 0;
            }

            .login-container {
                top: 15px;
                right: 15px;
            }

            nav {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 18px;
            }

            .img-padrao .logo {
                width: 300px;
            }

            .login-container a i {
                font-size: 18px;
            }

            .login-icon {
                font-size: 24px;
            }
        }
        /* Estilo das séries */
        .serie {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }

        .serie img {
            width: 150px;
            height: 200px;
            border-radius: 10px;
            border: 3px solid #ff7518; 
            box-shadow: 0 0 15px rgba(255, 117, 24, 0.5); 
            transition: transform 0.3s ease;
        }

        .serie img:hover {
            transform: scale(1.1); /* Efeito de zoom */
        }

        button {
            background-color: #ff7518;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #a020f0; 
        }

        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ff7518;
            border-radius: 5px;
            background-color: #3f0f3f;
            color: #ff7518;
            transition: border-color 0.3s ease;
        }

        select:focus {
            border-color: #a020f0;
            outline: none;
            box-shadow: 0 0 5px rgba(160, 32, 240, 0.5);
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
                padding: 0;
            }

            nav ul a {
                font-size: 24px;
                margin: 10px 0;
            }

            .login-container {
                top: 15px;
                right: 15px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 18px;
            }

            .img-padrao .logo {
                width: 300px;
            }

            .login-container a {
                font-size: 18px;
            }

            .login-icon {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

<nav id="menu">
    <ul>
        <li><a href="index.php" class="item_menu">Início</a></li>
        <li><a href="generos.php" class="item_menu">Gêneros</a></li>
        <li><a href="series.php" class="item_menu">Séries</a></li>
        <li><a href="contato.php" class="item_menu">Contato</a></li>
        <li><a href="sobre.php" class="item_menu">Sobre Nós!</a></li>
    </ul>
</nav>

<div class="img-padrao">
    <img src="imagens/logo2.png" alt="Logo do Series Flow" class="logo">
</div>

<!-- Ícone de Login ou Logout no Canto Superior -->
<div class="login-container">
    <?php if ($usuarioLogado): ?>
        <span>Olá, <?php echo $_SESSION['usuario']; ?>!</span>
        <a href="logout.php">
            Sair
            <i class="fas fa-sign-out-alt login-icon"></i>
        </a>
    <?php else: ?>
        <a href="login.php">
            Login
            <i class="fas fa-user login-icon"></i>
        </a>
    <?php endif; ?>
</div>

</body>
</html>
