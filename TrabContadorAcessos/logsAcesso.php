<?php
require('header.php');
?>

    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


    <div class="caixa vermelho">
        <h3>Logs de Acesso</h3>
        <form action="logsAcesso.php" method="Post" class="d-flex justify-content my-5">
            <input type="text" name="key" class="form-control input-key mx-3" placeholder="Key">
            <button class="btn btn-success" type="submit">Entrar</button>
        </form>
    </div>

    <?php

    if (isset($_SESSION) && !empty($_SESSION)) {

        ?>
        <div class="col-md-4 mb-3">
            <div class="border p-3 rounded bg-white shadow-sm">
                <h5>

                </h5>

            </div>
        </div>
        <?php
    }
    ?>

<?php
require('footer.php');
?>