<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino 2</title>
</head>

<body>
    
    <?php

        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corTexto = filter_input(INPUT_POST, "corTexto", FILTER_SANITIZE_SPECIAL_CHARS);
        $urlImagem = filter_input(INPUT_POST, "urlImagem", FILTER_SANITIZE_URL);
        $urlLink = filter_input(INPUT_POST, "urlLink", FILTER_SANITIZE_URL);
        $corFundo = filter_input(INPUT_POST, "corFundo", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

    <style>

        body{
            background-color: <?php echo $corFundo; ?>; /*Cor de fundo da pagina*/ 
            color: <?php echo $corTexto; ?>; /*Cor do texto  */
        }

    </style>

    <h1>
        <?php 
            echo $titulo; 
        ?>
    </h1>

    <p>
        <?php
            echo $corpo;
        ?>
    </p>

    <img src="<?php echo $urlImagem; ?>">;

    <br>

    <p>
        <a href="<?php  echo $urlLink; ?>">
            https://vtp.ifsp.edu.br/index.php/informativos/3637-arduino-day-2024.html
        </a>
    </p>



</body>
</html>