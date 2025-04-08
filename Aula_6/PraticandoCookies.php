<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <p>
        <a href="/dw2_2025/Aula_6">
            Voltar ao Index
        </a>
    </p>

    <h1>Destino GET</h1>
    <hr>

    <?php

        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        //se o(nome) valor existir
        if($nome){

            setcookie('nome', $nome, time() + 3600);

        } elseif (isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
        }

        if($email){

            setcookie('email', $email, time() + 3600);

        } elseif (isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
        }


        if($cor){

            setcookie('cor', $cor, time() + 3600);
            
        } elseif (isset($_COOKIE['cor'])){
            $cor = $_COOKIE['cor'];
        }

        
          
    ?>

    <br>

    <p>
        <?php
            echo "Nome Informado: $nome";
        ?>
    </p>

    <p>
        <?php
            echo "E-mail: $email";
        ?>
    </p>
    <br>

    <p>
        <a href="PraticandoCookies.php?nome=Marcos&email=marcos@gmail.com&cor=<?php echo $cor; ?>">
            [nome = Marcos | email = Marcos@gmail.com]
        </a>
    </p>

    <p>
        <a href="PraticandoCookies.php?nome=Jose&email=joseSilva@gmail.com&cor=<?php echo $cor; ?> ">
            [nome = Jose | email = joseSilva@gmail.com]
        </a>
    </p>

    <p>
        <a href="PraticandoCookies.php">
            Limpar Tudo
        </a>
    </p>

    <div class="col g-3" style="display: flex; gap: 10px;">

        <p>
            <a href="PraticandoCookies.php?cor=red&nome=<?php echo $nome; ?>&email=<?php echo $email ?>">
                <img src="imagens/red canva.png" alt="Red">
            </a>
        </p>

        <p>
            <a href="PraticandoCookies.php?cor=lightgreen&nome=<?php echo $nome; ?>&email=<?php echo $email ?>">
                <img src="imagens/lightgreen canva.png" alt="green">
            </a>
        </p>

        <p>
            <a href="PraticandoCookies.php?cor=lightblue&nome=<?php echo $nome; ?>&email=<?php echo $email ?>">
                <img src="imagens/blue canva.png" alt="blue">
            </a>
        </p>
    </div>



    <style>
        body {
            background-color:
                <?php echo $cor; ?>
        }
    </style>


</body>

</html>