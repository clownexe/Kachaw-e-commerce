<?php
$action = "inserir";
include_once 'model/clsCategoria.php';
include_once 'model/clsProduto.php';
include_once 'model/clsConexao.php';
include_once 'DAO/clsCategoriaDAO.php';
include_once 'DAO/clsProdutoDAO.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Kachaw - Inicio</title>
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
                                echo '<a class="nav-link" href="categorias.php">Cadastrar Categorias</a>';
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

        <?php
        if (isset($_SESSION['logado']) && $_SESSION['logado']) {


        ?>



            <form method="POST" action="controller/salvarProduto.php?<?php echo $action; ?>">
                <label for="txtNome">Nome:</label>
                <input type="text" name="txtNome" required />
                <br>
                <label for="txtPreco">Preço:</label>
                <input type="text" name="txtPreco" required />
                <br>
                <label for="txtQuantidade">Quantidade:</label>
                <input type="text" name="txtQuantidade" required />
                <br>
                <label for="categoria">Categoria:</label>
            <select name="categoria">
                <option value="0">Selecione a categoria...</option>
                <?php
                $lista = CategoriaDAO::getCategorias();

                foreach ($lista as $cat) {
                    echo '<option value="'   . $cat->id .  '">'  . $cat->nome . '</option>';
                }
                ?>
            </select>
                <br>
                <label for="foto">Foto:</label>
                <input type="file" name="foto" required />
                <br>
                <input type="submit" value="Salvar" />
                <input type="reset" value="Limpar" />
            </form>
        <?php
        }
        ?>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>