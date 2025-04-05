<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <?php
    require('header.php');
    ?>

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Formulario para contato</h1>
        </div>
    </div>

    <div class="mb-5">
        <div class="col-mb-5">
            <form action="destinoFormulario.php" method="post">
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="col">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Digite seu email...">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="msg">Mensagem:</label>
                    <textarea name="msg" id="msg" rows="3" cols="40" class="form-control"></textarea>
                </div><br>

                <div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                </div>

            </form>
        </div>
    </div>


    <?php
    require('footer.php');
    ?>
</body>

</html>