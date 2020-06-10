<?php
$action = "inserir";
require 'config.php';
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
<?php
    include_once "menu.php";
    ?>

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