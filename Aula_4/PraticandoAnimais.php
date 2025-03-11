<?php

?>

<style>
    .container {
        display: flex;
        gap: 40px;
    }

    img {
        width: 240px;
        height: 200px;
        align-items: center;
    }
</style>

<?php

$gato = filter_input(INPUT_GET, "gato", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$cachorro = filter_input(INPUT_GET, "cachorro", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$leao = filter_input(INPUT_GET, "leao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tubarao = filter_input(INPUT_GET, "tubarao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$animalSelecionado = filter_input(INPUT_GET, "animalSelecionado", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$ultimo = filter_input(INPUT_GET, "ultimo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);



?>
    <p>
        <a href="/dw2_2025/Aula_4">
            Voltar ao Index
        </a>
    </p>

    <h1>Praticando animais</h1>
    <hr>

    <div class="container">
        <a href="?bicho=gato.php&img=gato.jpg&ultimos=">
            <img src="imagens/gato.jpg" alt="gato.jpg"><br>
        </a>


    <?php
        if($animalSelecionado == $gato){
            ?>
                <p>Voce clicou no <span>Gato</span></p><br>

                <p>O gato é um mamífero da familia felideos.</p>
            <?php
        } elseif($animalSelecionado == $cachorro){
            ?>
                <a href="?bicho=cachorro.php&img=cachorro.webp&ultimos=">
                    <img src="imagens/cachorro.webp" alt="cachorro.webp">
                </a>

                <p>Voce clicou no <span>cachorro</span></p><br>

                <p>O cachorro é um mamífero da familia canideos.</p>
            <?php
        }
    ?>

        

        

        <a href="?bicho=leao.php&img=leao.webp&ultimos=">
            <img src="imagens/leao.webp" alt="leao.webp">
        </a>
        <a href="?bicho=tubarao.php&img=tubarao.webp&ultimos=">
            <img src="imagens/tubarao.webp" alt="tubarao.webp">
        </a>
    </div>
    <br>

    <br>
    <a href="PraticandoAnimais.php">
        Limpar tudo
    </a>

<?php

