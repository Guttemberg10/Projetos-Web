<?php
    session_start();
    include('conexao.php');

    $resultado[0] = $_SESSION['id'];
    $resultado[1] = $_SESSION['user'];
    $resultado[2] = $_SESSION['email'];
    $resultado[3] = $_SESSION['senha'];
    $resultado[4] = $_SESSION['foto'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <title>Perfil de usuário - Folk Fighter</title>
        <link rel="stylesheet" href="css/perfil.css">
        <link rel="shortcut icon" href="imagens/logo.ico" type="image/x-icon">
    </head>
    <body>
        <script>
            var controle = 0;// Varíavel que controla o disabled dos inputs
            function alt_dados(){
                var botao = document.getElementById('alt_btn');
                var nome = document.getElementById('nome');
                var email = document.getElementById('email');
                var senha = document.getElementById('senha');
                
                if(controle == 0){
                    // Desabilitando os botões:
                    nome.disabled = false;
                    email.disabled = false;
                    senha.disabled = false;
                    controle = 1
                    
                    // Alterando borda da caixa de texto
                    nome.style.border = "1px solid black";
                    email.style.border = "1px solid black";
                    senha.style.border = "1px solid black";
                }else{
                    document.perfil.submit();// Enviando o formulário
                }
            }
        </script>
        <div class="popup">
            <div class="icones">
                <a href="index.php">
                    <span title="Início" class="material-symbols-outlined icone">home</span>
                </a>
                <a href="donate.html" download="Folk Fighter.zip">
                    <span title="Baixar" class="material-symbols-outlined icone">download</span>
                </a>
                <a href="logout.php" onclick="return confirm('Deseja Realmente sair? ')">
                    <span title="Sair" class="material-symbols-outlined icone">login</span>
                </a>
            </div><br><br>
            <h1>Perfil</h1><br>
            <div class="sec_imagem">
                <div class="imagem">
                    <img src="<?php echo $resultado[4]; ?>">
                    <form action="atualiza_foto.php" style="height: 250px" method="POST" enctype="multipart/form-data">
                        <label for='input-file'>
                            <span title="Alterar foto" class="material-symbols-outlined lapis">stylus</span>
                        </label><br><br>
                        <input type="submit" id="enviar_foto" value="Salvar foto">
                        <input id='input-file' name="foto" type='file' value='' required="required">
                    </form>
                </div>
                <div class="sec_info_user">
                    <form action="atualiza_perfil.php" method="POST" id="perfil" name="perfil">
                        <b><p class="titulo_user">Username</p></b>
                        <input type="text" id="nome" name="nome" disabled value="<?php echo $resultado[1];?>">
                        <b><p class="titulo_user">E-mail</p></b>
                        <input type="email" id="email" name="email" disabled value="<?php echo $resultado[2];?>">
                        <input type="password" id="senha" name="senha" disabled value="<?php echo $resultado[3];?>">
                        <input type="button" id="alt_btn" onclick="alt_dados()" title="Alterar dados" value="Alterar dados">
                    </form>
                </div>
                <div class="sec_lixeira">
                    <a href="deletar.php" onclick="return confirm('Deseja Realmente excluir PERMANETEMENTE?')">
                        <span title="Deletar" id="lixeira" class="material-symbols-outlined">delete</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>