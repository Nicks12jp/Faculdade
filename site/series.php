<?php
include 'estilizacoes/headerSeries.php';
?>


<p>Séries mais assistidas de cada gênero</p>



<?php

$series = [
    [
        "nome" => "Narcos",
        "generos" => ["Ação"],
		"imagem" => "https://wallpapers.com/images/high/black-and-white-pablo-escobar-poster-vnxrk214jedgq73q.webp",
    ],
    [
        "nome" => "La Casa de Papel",
        "generos" => ["Ação"],
		"imagem" => "https://wallery.app/dufovot/actors-of-money-heist-wallpaper-500x667.jpg",
    ],
    [
        "nome" => "Cobra Kai",
        "generos" => ["Ação"],
        "imagem" => "https://wallery.app/dufovot/hawk-cobra-kai-wallpaper-500x667.jpg" , 
		
    ],
	 [
        "nome" => "The Witcher",
        "generos" => ["Ação"],
        "imagem" => "https://i.pinimg.com/564x/1f/57/c8/1f57c8124b02187a47dd6cd8721040e2.jpg" , 
		
    ],
	[
        "nome" => "Lupin",
        "generos" => ["Açãos"],
        "imagem" => "https://i.pinimg.com/564x/99/7e/fd/997efdb50550f030d8c10fe79dd43091.jpg" , 
		
    ],
	 [
        "nome" => "Stranger Things ",

        "generos" => ["Ficção científica"],
		"imagem" => "https://i.pinimg.com/564x/7a/d1/f5/7ad1f5ebe6436197d2551e2a12202bb1.jpg",
    ],
    [
        "nome" => "Doctor Who",
        "generos" => ["Ficção científica"],
		"imagem" => "https://i.pinimg.com/564x/8d/a6/aa/8da6aaaec2187d1cb566a6c96f2d6a6c.jpg",
    ],
    [
        "nome" => "Rick and Morty",
        "generos" => ["Ficção científica"],
        "imagem" => "https://i.pinimg.com/564x/66/50/44/66504402b4697c4fcb32eac42ed9a6f6.jpg" , 
		
    ],
	 [
        "nome" => "Dark",
        "generos" => ["Ficção científica"],
        "imagem" => "https://i.pinimg.com/564x/6f/37/82/6f37824a2e04bc52999a1db6ddfb7768.jpg " , 
		
    ],
	[
        "nome" => "Black Mirror",
        "generos" => ["Ficção científica"],
        "imagem" => "https://picfiles.alphacoders.com/423/thumb-1920-423486.jpg" , 
		
    ],
	 [
        "nome" => "Game of Thrones",
        "generos" => ["Drama"],
		"imagem" => "https://upload.wikimedia.org/wikipedia/pt/a/a4/Game_of_Thrones_Temporada_1_Poster.jpg",
    ],
    [
        "nome" => "Breaking Bad",
        "generos" => ["Drama"],
		"imagem" => "https://i.pinimg.com/564x/69/3d/de/693ddef64d399f08bf77ad4141f413fa.jpg",
    ],
    [
        "nome" => "Anne with an E",
        "generos" => ["Drama"],
        "imagem" => "https://i.pinimg.com/564x/36/69/69/3669691893a850660e0c5302d0e4c172.jpg" , 
		
    ],
	[
        "nome" => "Supernatural",
        "generos" => ["Drama"],
        "imagem" => "https://i.pinimg.com/564x/9a/fd/78/9afd782ba48410e87a04ab2f15c602cf.jpg" , 
		
    ],
	[
        "nome" => "Sherlock",
        "generos" => ["Drama"],
        "imagem" => "https://i.pinimg.com/564x/4d/18/bd/4d18bd282eb0f3f38ea0e5cf7c99321c.jpg" , 
		
    ],
	[
        "nome" => "The Boys",
        "generos" => ["Super-heróis"],
		"imagem" => "https://wallpapercg.com/download/the-boys--17546.jpg",
    ],
    [
        "nome" => "Loki",
        "generos" => ["Super-heróis"],
		"imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKWDxHJmu2A4WFRN1f7gUwl7ic00WY85-U8011gsQrix6I3DnvcY5sQt99OM6LDdSGQpk&usqp=CAU",
    ],
    [
        "nome" => "Demolidor",
        "generos" => ["Super-heróis"],
        "imagem" => "https://www.universohq.com/wp-content/uploads/2015/03/demolidor_matt.jpg" , 
		
    ],
	[
        "nome" => "Watchmen",
        "generos" => ["Super-heróis"],
        "imagem" => "https://br.web.img3.acsta.net/pictures/19/09/23/09/34/5683739.jpg" , 
		
    ],
	[
        "nome" => "Pacificador",
        "generos" => ["Super-heróis"],
        "imagem" => "https://www.justwatch.com/images/poster/259486995/s718/o-pacificador.jpg" , 
		
    ], 
	[
        "nome" => "The Vampire Diaries",
        "generos" => ["Fantasia"],
		"imagem" => "https://i.pinimg.com/564x/0d/b5/b8/0db5b8683747af26cce4ec7c8ea5f7b7.jpg",
    ],
    [
        "nome" => "Arrow",
        "generos" => ["Fantasia"],
        "imagem" => "https://i.pinimg.com/564x/d3/7a/03/d37a037c2a43340c0df7f6ab91e9b204.jpg" ,
    ],
    [
        "nome" => "Outlander",
        "generos" => ["Fantasia"],
        "imagem" => "https://i.pinimg.com/564x/9d/81/23/9d81237e80cb2731b9fc08a7d281cf3f.jpg" , 
		
    ],
	[
		"nome" => "The Originals",
        "generos" => ["Fantasia"],
		"imagem" => "https://i.pinimg.com/564x/44/81/95/4481950865eaa09203023907503724a8.jpg",
    ],
	[
        "nome" => "The Flash",
        "generos" => ["Fantasia"],
        "imagem" => "https://i.pinimg.com/564x/64/76/36/647636a55f978000551dd848e890db42.jpg" , 
		
    ],
];

// Lista de gêneros disponíveis
$generos_disponiveis = ["Ação", "Ficção científica", "Drama", "Super-heróis", "Fantasia",];

// Verifica o gênero selecionado
$genero_selecionado = isset($_POST['genero']) ? $_POST['genero'] : null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher Série por Gênero</title>
    
</head>
<body>

    <h2>Escolha o Gênero</h2>
    <form method="post" action="">
        <select name="genero">
            <option value="">Selecione um gênero</option>
            <?php foreach ($generos_disponiveis as $genero): ?>
                <option value="<?= $genero ?>" <?= $genero === $genero_selecionado ? 'selected' : '' ?>>
                    <?= $genero ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>
<div class="genero-container">
        <?php if ($genero_selecionado): ?>
            <h3>Séries do gênero: <?= htmlspecialchars($genero_selecionado) ?></h3>
            <?php
            $encontrouSerie = false;
            foreach ($series as $serie):
                if (in_array($genero_selecionado, $serie['generos'])):
                    $encontrouSerie = true;
            ?>
                <div class="serie">
                    <img src="<?= htmlspecialchars($serie['imagem']) ?>" alt="<?= htmlspecialchars($serie['nome']) ?>">
                    <p><?= htmlspecialchars($serie['nome']) ?></p>
                </div>
            <?php
                endif;
            endforeach;
            
            if (!$encontrouSerie):
                echo "<p>Nenhuma série encontrada para o gênero selecionado.</p>";
            endif;
            ?>
        <?php endif; ?>
    </div> 

</body>
</html>

<?php

include 'estilizacoes/footer.php';

?>