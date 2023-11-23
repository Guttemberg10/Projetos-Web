<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "folk_fighters");
    if(!$con){
        die("Erro na execussão: ".mysqli_connect_error());
    }
?>