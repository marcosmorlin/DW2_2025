<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if (isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
    $_SESSION["erro"] = "Voce esta tentando acessar conteudo restrito";
    header("location: inicio.php");

}

require("header.php");
?>


<div class="Inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
    </div>

    <p>
        Nome: <strong>Marcos Morlin</strong>
    </p>

    <p>
        E-mail: <strong>MarcosMorlin@gmail.com</strong>
    </p>

    <p>
        Telefone: <strong>997694147</strong>
    </p>

    <p>
        Endereço: <strong>Rua Jose Abdo Marao, 4151</strong>
    </p>

    <p>
        Cidade: <strong>Votuporanga</strong>
    </p>

    <p>
        Estado: <strong>SP</strong>
    </p>
</div>


<?php
require("footer.php");
?>