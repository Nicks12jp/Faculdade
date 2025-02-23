<?php
include 'estilizacoes/headerLogin.php';
?>

<div class="login-container">
    <h2>Login</h2>
    <form action="processa_login.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        <button id="botoes" type="submit">Entrar</button>
    </form>

    <!-- Mensagens de erro ou sucesso -->
    <?php
    if (isset($_GET['erro'])) {
        echo "<p class='erro'>Usuário ou senha inválidos!</p>";
    }
    if (isset($_GET['logout'])) {
        echo "<p class='sucesso'>Você foi desconectado com sucesso!</p>";
    }
    ?>

    <!-- Botão para voltar à página anterior -->
    <form action="<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php'; ?>" method="get" style="margin-top: 20px;">
        <button id="botoes" type="submit">
            Continuar sem Login
        </button>
    </form>
</div>

<?php
include 'estilizacoes/footer.php';
?>

