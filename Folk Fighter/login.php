<?php
    session_start();
    include('conexao.php');
    if(!empty($_POST)){
        $login = $_POST['nome'];
        $senha = $_POST['senha'];
        //$senha_crypto = base64_encode($senha);// Criptografando a senha para comparar com a salva no banco
        $busca = mysqli_query($con, "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha';");
        $contagem = mysqli_num_rows($busca);// Fazendo a busca no banco

        if($contagem != 1){
            $_SESSION['logado'] = 0;// Cadeado fechado. var = 0
            echo  "<script>alert('Usuário ou senha incorretos!');</script>";
        }else{
            $_SESSION['logado'] = 1;
            $resultado = mysqli_fetch_array($busca);
            $_SESSION['id'] = $resultado[0];
            $_SESSION['user'] = $resultado[1];
            $_SESSION['email'] = $resultado[2];
            $_SESSION['senha'] = $resultado[3];// Cadeado aberto. var = 1
            $_SESSION['foto'] = $resultado[4];
            header('location:index.php');// Redirecionandoo usuário para a página de busca            
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
        <title>Login no site Folk Fighter</title>
    </head>
    <body>
        <div class="linha"></div>
        <div class="bloco">
            <h1>Login</h1><br>
            <form action="login.php" method="POST">
                <input type="text" name="nome" placeholder="Usuário/E-mail" class="campo_txt" style="margin-bottom: 10px" required><br><br>
                <input type="password" placeholder="Digite sua senha" name="senha" class="campo_txt" required><br>
                <input style="float: left" type="checkbox" id="lembrar" name="lembrar">
                <label for="lembrar" style="float: left">Lembre-se de mim</label>
                <p style="float: right"><a href="#">Equeceu sua senha?</a></p><br><br><br>
                <input type="submit" value="Entrar" class="entrar"><br>
                <p>Não tem uma conta? <a href="cadastro.php">Inscreva-se agora!</a></p><br>
                <h2>Entrar com:</h2>
                <a href="#">
                    <img class="icons" src="imagens/login/facebook.png">
                </a>
                <a href="#">
                    <img class="icons" src="imagens/login/google.png">
                </a>
                <a href="#">
                    <img class="icons" src="imagens/login/apple.png">
                </a>
            </form>
        </div>
    </body>
</html>