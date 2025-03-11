<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada GET</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <a href="/dw2_2025/Aula_5/index-loops.html">
        <p>
            Voltar ao index
        </p>
    </a>

    <h2>Tabuada GET</h2>
    <hr>

    <form action="PraticandoTabuada.php" method="get">

        <label for="num">Numero:</label><br>
        <input type="number" name="numero" id="numero"><br>

        <br>
        <button type="submit" class="btn btn-success">Enviar</button>

    </form>

    <?php

    echo "<br>";
        $numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<h2>Tabuada do <span style='color:green; '>" . $numero . "</span> :</h2>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero * $i = " . $numero * $i . "</br>";
    }
    ?>
    <br>

</body>

</html>