<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <title>Séries Flow (Login)</title>

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
            background-color: #0D0D0D;
            background-image: linear-gradient(to right, #2e2e2e, #4c140c);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            overflow-x: hidden;
        }

        .img-padrao {
            text-align: center;
            margin: 20px;
        }

        .img-padrao .logo {
            width: 300px;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 0 15px #ff7518);
        }

        #page-login {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 117, 24, 0.8);
            width: 400px;
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #FF7518;
        }

        .login-container input {
            width: 95%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .login-container input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .login-container button {
            width: 100%;
            padding: 15px;
            background-color: #FF7518;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        .login-container button:hover {
            background-color: #d66d1f;
        }

        #botoes{
            font-family: "Creepster", system-ui;
            width: 100%;
            padding: 15px;
            background-color: #FF7518;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        #continuar:hover {
            background-color: #d66d1f;

        .login-container .erro {
            color: #ff4d4d;
            margin-top: 10px;
        }

        h1, h2 {
            text-align: center;
            margin: 10px 0;
        }

        .voltar {
            display: flex;
            list-style: none;
            justify-content: space-around;
            width: 100%;
            max-width: 800px;
            padding: 10px;
            align-items: center;
            color: white;
            text-decoration: none;
            font-size: 30px;
            margin: 0 15px;
            transition: color 0.3s;
        }

        .voltar:hover {
            color: #FF7518;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 10px;
            width: 100%;
            color: white;
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            .login-container {
                width: 90%;
                padding: 30px;
            }

            .login-container button {
                font-size: 16px;
            }

            h1, h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            body {
                font-size: 18px;
            }

            .img-padrao .logo {
                width: 250px;
            }

            .login-container {
                padding: 20px;
            }

            .login-container input {
                padding: 12px;
                font-size: 16px;
            }

            .login-container button {
                font-size: 16px;
                padding: 12px;
            }

            h1, h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<div class="img-padrao">
    <img src="imagens/logo2.png" alt="Logo do Series Flow" class="logo">
</div>
</body>
</html>
