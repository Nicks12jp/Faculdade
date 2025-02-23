<?php
session_start(); 

// Recebe os dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Armazena o nome do usuário na sessão (não importa o valor)
$_SESSION['usuario'] = $usuario; 

// Redireciona para o dashboard
header("Location: dashboard.php");
exit();
?>
