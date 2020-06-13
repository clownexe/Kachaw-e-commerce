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

    <title>Kachaw - Carrinho de Compras</title>
</head>

<body>
    <?php
        require_once 'menu.php';
    ?>

    <h1>Carrinho</h1>

    <?php
        if( !isset($_SESSION['carrinho']) || count( $_SESSION['carrinho'] ) == 0  ){
            echo '<h3>Seu carrinho está vazio!</h3>';
        } else {

            echo '<table border="1" >';
            echo '  <tr>';
            echo '      <th>Código</th>';
            echo '      <th>Foto</th>';
            echo '      <th>Nome</th>';
            echo '      <th>Quantidade</th>';
            echo '      <th>Preço</th>';
            echo '      <th>Subtotal</th>';
            echo '      <th>Remover</th>';
            echo '  </tr>';
            $total = 0;


            
            foreach( $_SESSION['carrinho'] as $idProd => $qtd ){
                
                $produto = ProdutoDAO::getProdutoById($idProd);
                echo ' <tr>';
                echo '      <td>'.$produto->id.'</td>';
                echo '      <td><img width="50px" src="'.$produto->foto.'" /></td>';
                echo '      <td>'.$produto->nome.'</td>';
                    
                echo '      <td>'.$qtd.' | <a href="controller/carrinho.php?remover&'
                            . 'idProduto='.$produto->id.'"><button>-</button></a> | '
                            . '<a href="controller/carrinho.php?adicionar&'
                            . 'idProduto='.$produto->id.'"><button>+</button></a> | </td>';
                    
                echo '      <td>R$ '.$produto->valor.'</td>';
                
                $subtotal = $qtd * $produto->valor;
                $total += $subtotal;
                    
                echo '      <td>R$ '.$subtotal.'</td>';

                echo '      <td><a href="controller/carrinho.php?excluir&idProduto='
                            .$produto->id.'" ><button>Excluir</button></a></td>';
                echo ' </tr>';
            }
            echo '  <tr>';
            echo '      <th colspan="4">Total:</th>';
            echo '      <th colspan="3">R$ '.$total.'</th>';
            echo '  </tr>';
            echo '</table>';



        }

            
            ?>

</body>
</html>