<?php
    session_start();
    $_SESSION['logado'] = 0;
    echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
    header("location:index.php");
?>