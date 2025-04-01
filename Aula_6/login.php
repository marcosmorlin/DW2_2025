<?php
session_start();

if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
    $_SESSION["erro"] = "Já esta autenticado !";
    header("location: inicio.php");
}

require 'header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>
</div>
<br>

<div class="col-4 offset-4">
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="Destino-login.php" method="post">
                <div class="form-floating mb-2">
                    <input type="text" name="usuario" class="form-control" id="floatingInput"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha"
                        required>
                    <label for="floatingPassword">Senha</label>
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </form>
        </div>
    </div>
</div>

<?php
require('footer.php');
?>