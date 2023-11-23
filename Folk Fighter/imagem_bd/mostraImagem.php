<?php

include('conexao.php');

$busca=mysqli_query($con,"SELECT * FROM imagem");
while($resultado=mysqli_fetch_array($busca)){
    ?>
    <img src="<?php echo $resultado[2];?>"/>
    <br>
    <?php
    echo $resultado[1];
    echo "<br/>";
}
?>