<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require('header.php');
    ?>

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Destino Formulario</h1>
        </div>
    </div>

    <?php
        date_default_timezone_set('America/Sao_Paulo');

        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dataHora = date('d/m/Y - H:i:s');

        echo "Nome: " . $nome . "<br>";
        echo "<br>Email: " . $email . "<br>";
        echo "<br>Mensagem: " . $msg . "<br>";
        echo "<br>Data: " . $dataHora . "<br>";

        $dir = "contatos";

        // se na existir diretorio
        if(!is_dir($dir)){
            mkdir($dir);
        };

        //enviar arquivo e seu conteudo
        $arquivo = $dir . "/contatos_" . date('dmY_His') . ".txt";
    // $arquivo = $dir . "/" . date('d_m_Y_His') . ".txt";
        $conteudo = "Data: $dataHora\n\nNome: $nome\nEmail: $email\nMensagem: $msg\n ";
        file_put_contents($arquivo, $conteudo);

    ?><br>

    <p>
        <a class="btn btn-primary" href="contato.php">
            Voltar
        </a>
    </p>


    <?php
    require('footer.php');
    ?>

</body>

</html>