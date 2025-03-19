<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-Primos</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <style>

        .primo{
            color:rgb(45, 180, 45);

        }

        .par{
            color: rgb(45, 180, 45);
        }

        .impar{
            color: red;
        }


        .naoPrimo{
            color: red;

        }
        .container {
            display: flex;
            align-items: center;
            gap: 40px;
        }

    </style>
</head>

</body>

    <a href="/dw2_2025/Aula_5/index-loops.html">
        <p>
            Voltar ao index
        </p>
    </a>
    
    <h2>Numeros Primos</h2>
    <hr>

    <div class="container">

        <a href="PraticandoNumPrimos.php?numero=1">
            Numero 1
        </a>

        <a href="PraticandoNumPrimos.php?numero=2">
            Numero 2
        </a>
    
        <a href="PraticandoNumPrimos.php?numero=3">
            Numero 3
        </a>

        <a href="PraticandoNumPrimos.php?numero=5">
            Numero 5
        </a>

        <a href="PraticandoNumPrimos.php?numero=20">
            Numero 20
        </a>

        <a href="PraticandoNumPrimos.php?numero=32">
            Numero 32
        </a>
    </div>

    <br>

    <?php

    $numero = filter_input(INPUT_GET,"numero", FILTER_SANITIZE_NUMBER_INT);


    // Se tiver numero
    if ($numero !== null && $numero !== false && $numero !== '') {

        // Se é par ou ímpar
        if ($numero % 2 == 0) {
            $tipo = "<span class='par'>PAR</span>";
        } else {
            $tipo = "<span class='impar'>ÍMPAR</span>";
        }
        

        // Se é primo
        if ($numero <= 1) {
            $primo = false;
        } elseif ($numero == 2) {
            $primo = true;
        } else {
            $primo = true;
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    $primo = false;
                    break;
                }
            }
        }

        if ($primo) {
            echo "<p>O número $numero é um número <span class='primo'>PRIMO</span>.</p>";
        } else {
            echo "<p>O número $numero <span class='naoPrimo'>NÃO É PRIMO</span>.</p>";
        }

        echo "<p>Além disso, ele é um número $tipo.</p>";
    }
    ?>

    <a href="PraticandoNumPrimos.php">
        Limpar Tudo
    </a>


</html>