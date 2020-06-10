<?php
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

    <title>Kachaw - x</title>
</head>

<body>
    <?php
    include "menu.php";
    ?>
    <div id="meio" class="row mt-5">
        <div class="col-9">
            <div id="produto" class="mb-4">
                <div class="d-inline-block mr-3">
                    <img src="http://placehold.it/200x220">
                </div>
                <div class="d-inline-block">
                    <h2>Nome:</h2>
                    <h4>Preço:</h4>
                    <h4>Quantidade:</h4>
                </div>
            </div>
            <div id="produto" class="mb-4">
                <div class="d-inline-block mr-3">
                    <img src="http://placehold.it/200x220">
                </div>
                <div class="d-inline-block">
                    <h2>Nome:</h2>
                    <h4>Preço:</h4>
                    <h4>Quantidade:</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-outline-success d-block mx-auto btn-lg mt-5 mb-3">Finalizar Compra</button>
            <h2 class="text-center">Total:</h2>
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