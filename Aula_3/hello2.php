<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página PHP</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>

    <h1>Primeira Página PHP 3</h1>

    <?php

        echo "<p>Hello World 2!</p>";
        date_default_timezone_set('America/Sao_Paulo');

        $nome = "Marcos";
        $data = date ("d/m/Y");
        $hora = date("h:i");

        echo "Ola, meu nome é <b>$nome</b>, hoje é dia <b>$data</b>, e agora são <b>$hora</b>.";

    ?>
    
    <hr>
    <br>

    <a href="Marcos/">
        Marcos
    </a>

</body>
</html>