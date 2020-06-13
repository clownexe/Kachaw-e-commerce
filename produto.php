<?php
require 'config.php';
$idProd = $_REQUEST["id"];
$produto = ProdutoDAO::getProdutosById($idProd);
if($produto == NULL){
    echo 'Erro!';
}elseif($produto === -1){
    echo 'Produto Inexistente';
}else{


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Kachaw - x</title>
</head>

<body>
    <?php
    include_once 'menu.php';
    ?>

        <div id="meio" class="row mt-5">
            <div class="col-4">
                <img src="<?= $produto[0]->foto; ?>" class="d-block mx-auto img-thumbnail">
            </div>
            <div class="col-4">
                <h3>Nome: <?= $produto[0]->nome; ?></h3>
                <h4>Preço: R$ <?= $produto[0]->valor; ?></h4>
                <p>Descrição: <?= $produto[0]->descricao;?></p>
            </div>
            <div class="col-4">
                <a href='controller/carrinho.php?adicionar&idProduto=<?= $produto[0]->id ?>'><button type="button" class="btn btn-outline-success d-block mx-auto btn-lg mt-5">Adicionar ao carrinho</button></a>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
<?php
}
?>