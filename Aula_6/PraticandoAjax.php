<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['campo']) && isset($_POST['valor'])) {
        setcookie($_POST['campo'], $_POST['valor'], time() + 3600);
    }

?>

<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
<title>Praticando AJAX</title>

<h2>Formulario de cadastro</h2>
<hr><br>

<script>

    function salvar(campo) {
        const input = document.getElementById(campo);
        const valor = input.value;

        const xhttp = new XMLHttpRequest(); /*criar obj */
        xhttp.open("POST", "PraticandoAjax.php", true);       /*abrir requisição (POST)*/ 
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("campo=" + campo + "&valor=" + encodeURIComponent(valor));
        
        
    }

    window.onload = () => {
        const cookie = document.cookie.split("; "); /*pegar os cookie*/
        cookie.forEach(element => {                 
            const [nomeCampo, valor] = element.split("=");
            const campo = document.getElementById(nomeCampo);

            if (campo){
                campo.value = decodeURIComponent(valor);
                campo.classList.add("is-valid");
                campo.classList.remove("is-invalid");
            }
        });
        
    }

</script>

<form action="/action_page.php" method="get">
    <img src="imagens/prancheta.png" alt="imagem" class="float-end img-fluid"
        style="float: right; height: 180px; margin-right: 150px; margin-top: 20px; margin-left:60px;">
    <div class="mb-5">
        <!--<img src="imagens/prancheta.png" alt="imagem" class="float-end">-->
        <div class="col-sm-6">
            <label for="name">Nome Completo:</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome..." oninput="salvar(this.id)"
                class="form-control " required><br>
        </div>

        <div class="row g-3">
            <div class="col-sm-4">
                <label for="phone">Telefone:</label><br>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}"
                    placeholder="(XX) XXXX-XXXX" class="form-control" oninput="salvar(this.id)"
                    title="Digite o telefone no formato: (DD)XXXX-XXXX" required><br>
            </div>

            <div class="col-sm-4">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" title="Digite o email no formato: user@email.com"
                    class="form-control" placeholder="Digite seu email..." oninput="salvar(this.id)" required>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-sm-3">
                <label for="quantity">CPF:</label>
                <input type="text" name="text" id="cpf" class="form-control" required placeholder="XXX.XXX.XXX.XX"
                    title="Digite o cpf no formato: XXX.XXX.XXX.XX" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}"
                    oninput="salvar(this.id)" required>
            </div>

            <div class="col-sm-3">
                <label for="date">Data de nascimento:</label>
                <input type="date" name="date" id="date" oninput="salvar(this.id)" class="form-control" required>
            </div>

            <div class="col-sm-3">
                <label for="quantity">CEP:</label>
                <input type="text" name="text" id="cep" class="form-control" oninput="salvar(this.id)"
                    placeholder="XX.XXX.XXX" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" required>
            </div>
        </div><br>

        <button class=" btn btn-success" type="submit">Cadastrar</button>
        <button class=" btn btn-danger" type="reset">Limpar</button>
    </div>

    <a class="btn btn-outline-primary" href="/dw2_2025/Aula_6">
        Voltar ao menu principal
    </a><br>
</form>