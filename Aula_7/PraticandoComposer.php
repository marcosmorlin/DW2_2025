<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Composer</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <p>
        <a href="/dw2_2025/Aula_7">
            Voltar ao Menu
        </a>
    </p>

    <div class="container">
        <h1 class="mt-4">Praticando Composer - Busca CEP Com composer</h1>
        <hr>

        <form class="row g-3" action="PraticandoComposer.php" method="post">
            <div class="col-3">
                <div class="mb-3">
                    <label for="cep">CEP</label>
                    <input type="number" class="form-control" name="cep" id="cep" required
                        placeholder="Somente numeros">
                </div>
            </div>

            <div class="col-3">
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </div>

        </form>
    </div>

    <?php

    //cep comeca nulo
    $cep = null;
    $response = null;

    //verificacao se o servidor responde(se recebeu o pedido) e se (cep) está preenchido
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {

        $cep = $_POST['cep'];
        $cep = preg_replace('/^(\d{2})(\d{3})(\d{3})$/', '$1.$2.$3', $cep);

        try {
            $response = CepPromise::fetch($cep);
        } catch (CepPromiseException $e) {
            $response = $e->toArray();
        }
    }



    /*echo "<pre>";
    var_dump($response);
    echo "</pre>";
    */
    
    //verificar se a reposta tem a cidade e mostrar
    if (isset($response->city)) {
        ?>
        <div class="alert alert-success border border-3 border-success" role="alert">

            <h1>CEP: <?= $cep ?></h1><br>
            <p>Rua: <?= $response->street ?> </p>
            <p>Bairro: <?= $response->district ?> </p>
            <p>Cidade: <?= $response->city ?> </p>
            <p>Estado: <?= $response->state ?> </p>

        </div>
        <?php
    }

    // se a resposta deu erro / !empty
    if (is_array($response) && isset($response['errors']) && !empty($response['errors'])) {
        echo "<div class='alert alert-danger border border-3 border-danger' role='alert' >";
        echo "<h2>CEP: " . $cep  . " </h2>";
        echo "<p>Detalhes do erro :</p><ul>";

        //pra cada erro, mostrar mensagem
       foreach($response['errors'] as $error){
        //verificar se cada erro tem a msg
        if(isset($error['message'])){
            echo "<li> ". $error['message'] . " </li>";
        }
        
       }

        echo "</ul>";
    }

    ?>

</body>

</html>