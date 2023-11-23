<?php
    session_start();
    include('conexao.php');

    $resultado[0] = $_SESSION['id'];// ID usado como chave primária no delete
    $_SESSION['logado'] = 0;// Deslogando o usuário

    mysqli_query($con, "DELETE FROM usuario WHERE id = '$resultado[0]';");// Deletando do banco de dados
    echo "<script>alert('Você fará falta... Volte quando quiser! :3');</script>";
    echo "<script>window.location.replace('index.php');</script>";// Fazendo o usuário voltar para a página inicial
?>