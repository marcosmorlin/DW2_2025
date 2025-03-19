<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <p>
        <a href="/dw2_2025/Aula_5/PraticandoTabela.php">
            Voltar a tabela
        </a>
    </p>
<h2>Destino</h2>
<hr>
<br>

<?php

$linhas = filter_input(INPUT_POST,"linhas", FILTER_SANITIZE_SPECIAL_CHARS);
$colunas = filter_input(INPUT_POST,"colunas", FILTER_SANITIZE_SPECIAL_CHARS);

    if($linhas >= 0 && $colunas >= 0){
        echo "<table class = 'table table-primary'; >";

        for($i = 0; $i < $linhas; $i++){
            echo "<tr>" ;

            for($j = 0; $j < $colunas; $j++){
                echo "<td>----<td>";
            }
            
            echo "</tr>";
        }

        echo "</table>";
    } 

?>

</body>

</html>