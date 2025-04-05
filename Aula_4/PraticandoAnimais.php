<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Animais</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <style>
        .container {
            display: flex;
            gap: 40px;
        }

        img {
            width: 240px;
            height: 200px;
            border: 4px solid transparent;
        }

        .selecionado {
            border-color: red;
        }
    </style>

    <?php

    $animalSelecionado = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
    $ultimosClicados = filter_input(INPUT_GET, "ultimos", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

    <p>
        <a class="btn btn-primary" href="/dw2_2025/Aula_4/MenuPrincipal.html">
            Voltar ao Menu
        </a>
    </p>

    <h1>Praticando animais</h1>
    <hr>

    <?php

        if ($animalSelecionado) {
            if ($ultimosClicados) {

                $ultimosClicados = $ultimosClicados . ", $animalSelecionado";

            } else {
                $ultimosClicados = $animalSelecionado;
            }
        }

    ?>
    <div class="container">
        <a href="?animal=gato&Imagem=gato&ultimos=<?= $ultimosClicados ?>">
            <img src="imagens/gato.jpg" class="<?= $animalSelecionado == 'gato' ? 'selecionado' : '' ?>" alt="gato">
        </a>

        <a href="?animal=cachorro&ultimos=<?= $ultimosClicados ?>">
            <img src="imagens/cachorro.webp" class="<?= $animalSelecionado == 'cachorro' ? 'selecionado' : '' ?>"
                alt="cachorro">
        </a>

        <a href="?animal=leao&ultimos=<?= $ultimosClicados ?> ">
            <img src="imagens/leao.webp" class="<?= $animalSelecionado == 'leao' ? 'selecionado' : '' ?>" alt="leao">
        </a>

        <a href="?animal=tubarao&ultimos=<?= $ultimosClicados ?> ">
            <img src="imagens/tubarao.webp" class="<?= $animalSelecionado == 'tubarao' ? 'selecionado' : '' ?>"
                alt="tubarao">
        </a>
    </div>

    <br>

    <?php

    if ($animalSelecionado == 'gato') {
        echo "<p>Você clicou no <strong>Gato</strong>.</p>";
        echo "<p>O gato é um mamífero da família dos felídeos.</p>";
    } elseif ($animalSelecionado == 'cachorro') {
        echo "<p>Você clicou no <strong>Cachorro</strong>.</p>";
        echo "<p>O cachorro é um mamífero domesticado da família dos canídeos.</p>";
    } elseif ($animalSelecionado == 'leao') {
        echo "<p>Você clicou no <strong>Leão</strong>.</p>";
        echo "<p>O leão é um grande felino conhecido como o rei da selva.</p>";
    } elseif ($animalSelecionado == 'tubarao') {
        echo "<p>Você clicou no <strong>Tubarão</strong>.</p>";
        echo "<p>O tubarão é um peixe cartilaginoso predador dos mares.</p>";
    }
    ?>
    <?php

    echo "<h2>Ultimos clicados</h2>";
    
    echo "<ul>";
    if($ultimosClicados) {
        
        echo "<li>$ultimosClicados</li>";
    } 
    echo "</ul>";

    ?>

    <a class="btn btn-danger" href="PraticandoAnimais.php">
        Limpar tudo
    </a>

</body>

</html>