<?php
require 'config.php';
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
<?php
    include_once "menu.php";
    ?>
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
                        <input type="email" name="user" />
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