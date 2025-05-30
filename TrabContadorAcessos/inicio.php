<?php
session_start();
require('header.php');
?>

<link rel="stylesheet" href="style.css">

<div class="row">
    <div class="col-4 offset-4">
        <?php
        if(isset($_SESSION["erro"]) && !empty($_SESSION["erro"])){
            ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION["erro"] ?>
                </div>
            <?php
            unset($_SESSION["erro"]);
        }
        ?>
    </div>
</div>

<div class="caixa verde">
    <h1>Página Inicial</h1>
    <p>BEM VINDO, ESTA É A PAGINA INICIAL</p>
    <img src="imagens/Casa.png" alt="Ícone Casa">
</div>

<?php
require('footer.php');
?>