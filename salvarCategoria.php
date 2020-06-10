<?php
require 'config.php';

$nome = $_POST['txtNome'];
if( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO categorias (nome) VALUES ( '$nome' )";
    Conexao::executar( $query );
    header("Location: categorias.php");
}