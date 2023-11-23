<?php
    session_start();
    include('conexao.php');

    $resultado[0] = $_SESSION['id'];
    $caminho = "imagens/".$_FILES['foto']['name'];
    $_SESSION['foto'] = $caminho;

    move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
    mysqli_query($con, "UPDATE usuario SET foto = '$caminho' WHERE id = '$resultado[0]';");
    echo "<script>alert('Perfil atualizado com sucesso!');</script>";
    echo "<script>window.location.replace('perfil.php');</script>";// Fazendo o usuário voltar para a página de perfil
?>