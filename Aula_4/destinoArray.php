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
    <br>

    <h1>Destino</h1>
    <hr>

    <?php
    echo "<h1>Dados Requisição: </h1>";

    ?>
    <br>

    <textarea name="text" id="text" cols="100" rows="10">
        <?php
        
        var_dump($_POST);
        
        ?>
    </textarea><br>

    <?php
        echo "<h2>Interesses Selecionados em Ordem Alfabética: </h2>";

    //    $interesses = filter_input_array(INPUT_POST, "interesses" , FILTER_SANITIZE_SPECIAL_CHARS);
       $interesses = $_POST["interesses"]; 
       sort($interesses);

        echo "<ul>";
            
            for($i = 0; $i < min (3, count(value: $interesses)); $i++){
                echo "<li>$interesses[$i]</li>";
            }

            if(count($interesses) > 3){
                echo "<li>...</li>";
            }
        
        echo "</ul>";
        
    ?>
    
</body>

</html>