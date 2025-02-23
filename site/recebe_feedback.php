<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Feedback Recebido</title>
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
            font-family: "Roboto", sans-serif;
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
            color: white; 
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
            animation: flicker 2s infinite; 
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

        .obrigado {
            background-color: rgba(28, 12, 44, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 80%;
        }

        .obrigado h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .obrigado button {
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #ff7518;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .obrigado button:hover {
            background-color: #a020f0;
        }
        
        @media (max-width: 480px) {
            body {
                font-size: 18px;
            }

            .img-padrao .logo {
                width: 300px;
            }
        }
        
        footer {
            font-family: "Creepster", system-ui;
            background-color: rgba(28, 12, 44, 0.8);
            text-align: center;
            padding: 10px;
            width: 100%;
            color: #ff7518;
        }
    </style>
</head>
<body>
<div class="img-padrao">
    <img src="imagens/logo2.png" alt="Logo do Series Flow" class="logo">
</div>
    <div class="obrigado">
        <h1>Obrigado pelo seu feedback!</h1>
        <p>Agradecemos por compartilhar sua opinião conosco.</p>
        <button onclick="window.history.back()">Voltar</button>
    </div>
</body>
</html>
<?php
include 'estilizacoes/footer.php';
?>