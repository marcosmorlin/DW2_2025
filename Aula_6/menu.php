<ul class="nav nav-pills">
    <li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>
    <li class="nav-item"><a href="" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="" class="nav-link">Contato</a></li>
    <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
    
    <?php
    // Se usuario existir e estiver logado
        if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
        ?>
        <!--<li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>-->
        <li class="nav-item"><a href="sair.php" class="nav-link text-danger">Sair</a></li>
    <?php
    } else {
    ?>

    <!--Se usuario nao estiver logado-->
    <li class="nav-item"><a href="login.php" class="nav-link active" aria-current="page">Entrar</a></li>
    <?php
    }
    ?>
</ul>