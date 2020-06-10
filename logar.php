<?php
require 'config.php';
    //$usuario_cadastrado = "admin@admin.com";
    //$senha_cadastrada = "123";
    
    
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    
    
    $query = "SELECT id, email FROM usuarios WHERE email = '$user' AND senha = '$senha'";
    $result = Conexao::consultar($query);
    
    if (mysqli_num_rows($result) >0){
        session_start();
        $usuario = mysqli_fetch_assoc($result);
        $_SESSION['logado'] = TRUE;
        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['email_usuario'] = $usuario['email'];
        header("Location: minhaconta.php");
    }else{
        header("Location: login.php?erroNoLogin");
    }
    
    
?>