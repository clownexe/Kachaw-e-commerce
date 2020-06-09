<?php
session_start();
if (isset($_REQUEST['erroNoLogin'])) {
    echo " <script> alert('Usuário ou senha inválidos');</script>";
} else {
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Kachaw - Conta</title>
</head>

<body>
    <div class="container">
        <div id="topo">
            <div class="text-center">
                <img src="imagens/logo.png">
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="minhaconta.php">Minha Conta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carrinho.php">Carrinho</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (session_status() != PHP_SESSION_ACTIVE) {
                                session_start();
                            }
                            if (isset($_SESSION['logado']) && $_SESSION['logado']) {
                                echo '<a class="nav-link" href="cadastrar.php">Cadastrar Produtos</a>';
                            }
                            ?>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Digite o nome..." aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>
        </div>
        <div id="meio" class="row mt-5">
            <div class="col-6">
                <?php
                if (isset($_SESSION['logado']) && $_SESSION['logado']) {
                    echo "Olá, Seja bem vindo.";
                    ?>
                    <br>
                    <br>
                    <br>
                    <?php
                    echo '<a href="logout.php"><button>Sair</button></a>';
                } else {
                ?>
                    <h1>Login</h1>
                    <form method="POST" action="logar.php">
                        <label>Usuário:</label>
                        <br>
                        <input type="text" name="user" />
                        <br>
                        <label>Senha:</label>
                        <br>
                        <input type="password" name="senha" />
                        <br>
                        <br>
                        <div class="form-group row">
                            <input type="submit" value="Entrar" />
                            <br>
                        </div>
                    </form>
            </div>
        <div class="col-6 border-left">
            <h1>Cadastrar</h1>
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
        <?php

                }
        ?>
        
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>