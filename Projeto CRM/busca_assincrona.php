<?php
    include('conexao.php');

    $nome = $_POST['busca_dados'];
    $busca = mysqli_query($con, "SELECT idfuncionarios, nome, formacao, setor FROM funcionarios WHERE nome LIKE '$nome%';");
    $contagem = mysqli_num_rows($busca);
    if($contagem > 0){
        while($resultado = mysqli_fetch_row($busca)){
            echo "<tr><td>".$resultado[0]."</td>";
            echo "<td>".$resultado[1]."</td>";
            echo "<td>".$resultado[2]."</td>";
            echo "<td>".$resultado[3]."</td>";
            echo "<td class='actions'>
            <a class='btn btn-success btn-xs' href='visualizar_pesquisa.php?idfuncionarios=".$resultado[0]."'>Visualizar</a>
            <a class='btn btn-danger btn-xs' id='".$resultado[0]."' onclick='excluir_assinc(this.id)'>Excluir</a>
        </td></tr>";
        }
    }else{
        echo "Nome não existe";
    }
?>