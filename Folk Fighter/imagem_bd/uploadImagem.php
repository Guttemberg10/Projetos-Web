<?php
include('conexao.php');
if(!empty($_POST)){
    $nome = $_POST['nome'];
    if(isset($_FILES['foto'])){
        $caminho = "./uploads/".$_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
        echo "Upload feito com sucesso";
    }
    mysqli_query($con,"INSERT INTO imagem (nome,imagem) VALUES ('$nome','$caminho')");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        Imagem: <input type="FILE" name="foto"/>
        <br>
        Nome: <input type="text" name="nome"/>
        <br>
        <input type="submit" value="gravar imagem"/>
    </form>
</body>
</html>