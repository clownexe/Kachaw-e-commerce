<?php
require 'config.php';
if(isset($_REQUEST['ordem']))
$ordemProd = $_REQUEST['ordem'];
else
$ordemProd = NULL;
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


    <div id="meio" class="row">
        <?php
        $result = ProdutoDAO::getProdutos($ordemProd);
        foreach ($result as $prod) {
        ?>
            <div class="col-4 my-5">
                <a href="produto.php?id=<?= $prod->id; ?>"><img src="<?= $prod->foto; ?>" class="d-block mx-auto img-thumbnail"></a>
                <p class="text-center"><?= $prod->nome; ?></p>
                <p class="text-center"> R$:<?= $prod->valor; ?></p>
                <a href='controller/carrinho.php?adicionar&idProduto=<?= $prod->id ?>'><button type="button" class="btn btn-outline-success d-block mx-auto btn-lg mt-5">Comprar</button></a>
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