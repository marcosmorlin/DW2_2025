<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino PHP</title>
</head>

<body>
    <h1>Destino</h1>
    <hr>
    <?php

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo "<p>Nome: $nome<br>E-mail: $email</p>";
    ?><br>

    <p>
        <a href="formulario.html">Voltar ao formulario</a>
    </p>

    <style>
        body{
            background-color: <?php echo $cor; ?>
        }
    </style>
</body>
</html>