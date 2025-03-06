<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino Array</title>
</head>

<body>

    <a href="PraticandoArray.html">
        Voltar à lista
    </a>

    <h1>Destino</h1>
    <hr>

    <?php
    echo "<h1>Dados Requisição: </h1>";

    ?>
    <br>

    <textarea name="text" id="text" cols="100" rows="10">
        <?php
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        ?>
    </textarea><br>

    <?php
    echo "<h2>Interesses Selecionados  (Ordem Alfabética): </h2>";

    $interesses = array_values($_POST);
    sort($interesses);

    echo "<ul>";
        
    foreach(array_slice ($interesses, 0, 3) as $interesses){
        echo "<li>$interesses</li>";
        if(count($interesses) > 3){
            echo "<li>...</li>";
        }
    }
    
    echo "</ul>"
    
    ?>
    
</body>

</html>