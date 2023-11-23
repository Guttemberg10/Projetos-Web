<?php
    session_start();
    include('conexao.php');

    $resultado[0] = $_SESSION['id'];// ID usado como chave primária no update
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificando se o novo username que o usuário quer cadastras já existe:
    $busca = mysqli_query($con, "SELECT * FROM usuario WHERE nome = '$nome' AND email = '$email';");
    $contagem = mysqli_num_rows($busca);// Fazendo a busca no banco
        
    if($contagem > 0){// Se já encontrar o username
        echo "<script>alert('Nome/E-mail já cadastrados');</script>";
        echo "<script>window.location.replace('perfil.php');</script>";// Fazendo o usuário voltar para a página de perfil
    }else{
        // Atualizando as variáveis
        $resultado[1] = $nome;
        $resultado[2] = $email;
        $resultado[3] = $senha;
        $_SESSION['user'] = $resultado[1];
        $_SESSION['email'] = $resultado[2];
        $_SESSION['senha'] = $resultado[3];
        
        $senhaCripto = base64_encode($senha);               
        mysqli_query($con, "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$resultado[0]';");
        echo "<script>alert('Perfil atualizado com sucesso!');</script>";
        echo "<script>window.location.replace('perfil.php');</script>";// Fazendo o usuário voltar para a página de perfil
    }
?>