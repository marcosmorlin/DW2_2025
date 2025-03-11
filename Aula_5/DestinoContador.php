<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>

<body>

    <p>
        <a href="PraticandoContador.php">
            Voltar Ao contador
        </a>
    </p>

    <h2>Destino</h2>

    <?php

    $Inicio = filter_input(INPUT_POST, "Inicio", FILTER_SANITIZE_NUMBER_INT);
    $Final = filter_input(INPUT_POST, "Final", FILTER_SANITIZE_NUMBER_INT);
    $Incremento = filter_input(INPUT_POST, "Incremento", FILTER_SANITIZE_NUMBER_INT);

    ?>

    <br>

    <p>

        <?php
            echo "<h2>Parametros informados: </h2>";
        ?>
    </p>

    <p>
        <?php

        echo "Inicio: " . $Inicio;

        ?>
    </p>

    <p>
        <?php

        echo "Final: " . $Final;

        ?>
    </p>

    <p>
        <?php

        echo "Incremento: " . $Incremento;

        ?>
    </p>

    <p>
        <?php

        for ($i = $Inicio; $i <= $Final; $i += $Incremento) {
            echo $i . " ";
        }

        ?>
    </p>

</body>

</html>