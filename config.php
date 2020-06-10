<?php
include_once 'model/clsProduto.php';
include_once 'model/clsCategoria.php';
include_once 'model/clsConexao.php';
include_once 'controller/salvarProduto.php';
include_once 'DAO/clsCategoriaDAO.php';
include_once 'DAO/clsProdutoDAO.php';
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
?>