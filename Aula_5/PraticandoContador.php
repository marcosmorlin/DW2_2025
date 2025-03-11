<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador GET</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <a href="/dw2_2025/Aula_5/index-loops.html">
        <p>
            Voltar ao index
        </p>
    </a>

    <h2>Contador GET</h2>
    <hr>
    <br>

    <form action="DestinoContador.php" method="post">
        <label for="quantity">Inicio:</label><br>
        <input type="number" name="Inicio" id="Inicio">

        <br>
        <label for="quantity">Final:</label><br>
        <input type="number" name="Final" id="Final"><br>

        <label for="quantity">Incremento:</label><br>
        <input type="number" name="Incremento" id="Incremento"><br>

        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </form>

</body>

</html>