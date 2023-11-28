<?php
    include('conexao.php');// Chamando a conexão com banco de dados
    $id = $_POST['idfuncionarios'];// Pegando o id do funcionário via POST
    mysqli_query($con,"DELETE FROM funcionarios WHERE idfuncionarios = '$id';");// Excluindo do banco de dados
?>