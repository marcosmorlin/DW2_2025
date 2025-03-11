<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-Primos</title>

    <style>
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


    <?php

    $numero = filter_input(INPUT_GET,"", FILTER_SANITIZE_NUMBER_INT);

    if($numero % 2 == 0){
        echo  "<p>O numero". $numero . " É um numero<span>PRIMO</span></p><br>";
        echo  "<p>Além disso, é um número</p>";
    }
    ?>

</html>