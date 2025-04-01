<?php

session_start();
require("header.php");

$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

if ($usuario == "marcos") {
    if ($senha == "123") {
        $_SESSION["usuario"] = $usuario;
        header("location: inicio.php");
    } else {
        $_SESSION["erro"] = 'Sua <strong>Senha</strong> informada está incorreta<br> Verifique as informaçoes e tente novamente<br><hr><a href="login.php"> <p>Clique aqui para voltar</p> </a>';
        unset($_SESSION["usuario"]);
    }
} else {
    $_SESSION["erro"] = 'O <strong>Usuario</strong> não foi encontrado <br> Verifique as informaçoes e tente novamente<br><hr><a href="login.php"> <p>Clique aqui para voltar</p> </a>';
    unset($_SESSION["usuario"]);
}

?>

<?php
if (isset($_SESSION["erro"]) && !empty($_SESSION["erro"])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $_SESSION["erro"] ?>
    </div>
    <?php
    unset($_SESSION["erro"]);
}
?>

<?php

require("footer.php");

?>