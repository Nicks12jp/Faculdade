<?php
include 'estilizacoes/headerContato.php';
?>

<h1>Bem-vindo ao Series Flow</h1>
<p>Explore os melhores conteúdos sobre séries aqui!</p>

<!-- Informações de Contato -->
<div class="contact-info">
    <h2>Entre em Contato</h2>
    <p>Telefone: (11) 98765-4321</p>
    <p>E-mail: seriesflow@gmail.com</p>
    <p>Bem-vindo ao Séries Flow! Aqui, você encontra uma vasta seleção de séries organizadas por gênero e estilo, pensadas especialmente para os apaixonados por maratonas. Queremos que você encontre sua próxima série favorita e compartilhe suas experiências conosco.</p>
    
    <!-- Caixa de Feedback -->
    <form action="recebe_feedback.php" method="POST" class="feedback-form">
        <label for="feedback">Deixe seu feedback:</label>
        <textarea id="feedback" name="feedback" placeholder="Escreva sua mensagem aqui..." required></textarea>
        <button type="submit">Enviar Feedback</button>
    </form>
</div>

<?php
include 'estilizacoes/footer.php';
?>