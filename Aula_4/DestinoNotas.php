<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>

<body>

    <style>
        body {
            background-color:rgb(190, 190, 190);
        }
    </style>


    <p>
        <a href="Praticando.html">
            Voltar à calculadora
        </a>
    </p>

    <h1>Destino</h1>
    <hr>

    <?php

    $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 4) {

        $mensagem = "<span style='background-color:red; color:white;'> REPROVADO</span>";
    } elseif ($media >= 4 & $media <= 6) {

        $mensagem = "<span style='background-color:yellow; color:black;'> DE RECUPERAÇÃO </span>";
    } elseif ($media >= 6) {

        $mensagem = "<span style='background-color:green; color:white;'> APROVADO </span>";
    }

    ?>

    <br>

    <p>
        <?php

        echo "um aluno com as notas <b>" . $nota1 . "</b> , <b>" . $nota2 . "</b> e <b>" . $nota3 . "</b> tem uma média igual a: <b> <span style='background-color:white;' >" . $media . "</span> </b>";

        ?>
    </p>
    <br>

    <p>
        <?php


        echo "Com essa média o aluno está: " . $mensagem;

        ?>

</body>

</html>