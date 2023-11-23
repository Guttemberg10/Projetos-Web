<?php
    include('conexao.php');
    if(!empty($_POST)){ //SE NÃO estiver vazio o POST...
        $login = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$senha_crypto = base64_encode($senha);// Criptografando a senha para comparar com a salva no banco
        $busca = mysqli_query($con, "SELECT * FROM usuario WHERE nome = '$login' AND email = '$email';");
        $contagem = mysqli_num_rows($busca);// Fazendo a busca no banco

        if($contagem > 0){
            echo "<script>alert('Nome/E-mail já cadastrados');</script>";
        }else{
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $senhaCripto = base64_encode($senha);
            
            mysqli_query($con, "INSERT INTO usuario VALUES(NULL, '$nome', '$email', '$senha', 'imagens/cuca2.png');");
            header('location:download.html');
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
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro no site Folk Fighters</title>
    <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    </head>
    <body>
            <div class="linha"></div>
            <div class="bloco">
                <h1>Calminha aí!<br>Cadastre-se antes de baixar</h1><br>
                <form action="cadastro.php" method="POST">
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome de usuário" class="campo_txt" style="margin-bottom: 10px"><br><br>
                    <input type="email" id="email" name="email" placeholder="Digite seu E-mail" class="campo_txt" style="margin-bottom: 10px"><br><br>
                    <input style="float: left" type="password" placeholder="Digite sua senha" name="senha" class="senha" id ="senha" onkeyup="confirmaSenha()">
                    <input style="float: right" type="password" placeholder="Confirme a senha" name="senhaC" class="senha" id = "senhaC" onkeyup="confirmaSenha()"><br><br>
                    <input style="float: left" id="promo" type="checkbox" name="prom"/>
                    <label for="promo" style="float: left">Desejo receber promoções no e-mail</label><br><br>
                   <br> <input style="float: left" type="checkbox" name="lembrar" id="lembrar"/>

                    <label for="lembrar" style="float: left">Lembre-se de mim</label> <br>

                   
                    <br>
                    <input type="submit" value="Cadastrar" class="entrar" disabled id="botao"><br>

                    <p>Já tem uma conta? <a href="login.php">Entre agora!</a></p><br>
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
        
        <script>
            function confirmaSenha(){
                var nome = document.getElementById('nome');
                var email = document.getElementById('email');
                var senha = document.getElementById('senha').value;
                var senhaC = document.getElementById('senhaC').value;
                var botao = document.getElementById('botao');

                if(senha == senhaC && nome != "" && email != ""){
                    botao.disabled = false;
                }else{
                    botao.disabled = true;
                }
            }
            
            var promocao = document.getElementById('promo');
            promocao.checked = true;
        </script>
    </body>
</html>