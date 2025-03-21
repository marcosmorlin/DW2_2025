<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de tabela</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <style>
        .tabela{
            display: flex;
            gap: 20px;
            margin: 25px;
        }
        
        .btn{
            justify-content: center;
            display: flex;
            gap: 5px;
        }
        
    </style>
</head>

<body>

    <a href="/dw2_2025/Aula_5/index-loops.html">
        <p>
            Voltar ao index
        </p>
    </a>

    <h1>Gerador de tabela</h1>
    <hr>

    <form action="DestinoTabela.php" method="Post" class="d-flex align-items-center">
        <div class="tabela">
            <label for="linhas" id="linhas" nome="linhas">Linhas</label>
            <input type="number" name="linhas" id="linhas" class="form-control">

            <label for="colunas" id="colunas" nome="colunas">Colunas</label>
            <input type="number" name="colunas" id="colunas" class="form-control"><br>

            <label for="estilo" id="estilo" nome="estilo">Estilo</label>
            <select name="estilo" id="estilo" class="form-select">
                <option value="table-primary">Table Primary</option>
                <option value="table-success">Table Success</option>
                <option value="table-danger">Table Danger</option>
                <option value="table-warning">Table Warning</option>
                <option value="table-warning">Table Dark</option>
            </select>
        </div> <br>

        <div class="btn">
            <button type="submit" class="btn btn-success">Enviar</button><br>
            <button type="reset" class="btn btn-danger">Limpar</button>

        </div>

    </form>

</body>

</html>