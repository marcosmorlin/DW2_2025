<ul class="nav nav-pills">
    <li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>
    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
    <li class="nav-item"><a href="logsAcesso.php" class="nav-link" style= "color: red; ">Logs de Acesso</a></li>
    
    <?php
    // Se usuario existir e estiver logado
        if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
        ?>
        <li class="nav-item"><a href="sair.php" class="nav-link text-danger">Sair</a></li>
    <?php
    } else {
    ?>

    <!--Se usuario nao estiver logado-->
    
    <?php
    }
    ?>
</ul>