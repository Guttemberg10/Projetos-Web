﻿<?php
  include('conexao.php');

  $id = $_GET['idfuncionarios'];
  $busca = mysqli_query($con, "SELECT * FROM funcionarios WHERE idfuncionarios = '$id';");
  $resultado = mysqli_fetch_row($busca);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRM Registro Funcionários</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">CRM Registro Funcionários</a>
   </div>
   
  </div>
 </nav>

 <div id="main" class="container-fluid">

 <!-- início da área para preencher com os dados do funcionário selecionado para visualização - NÃO FAZER ASSÍNCRONO-->
  <h3 class="page-header"><?php echo $resultado[1]?></h3>
 
  
  <div class="row">
    <div class="col-md-4">
      <p><strong>Nome</strong></p>
  	  <p><?php echo $resultado[1]?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Endereço</strong></p>
  	  <p><?php echo $resultado[2]?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Formação</strong></p>
  	  <p><?php echo $resultado[3]?></p>
    </div>

    <div class="col-md-4">
      <p><strong>Setor</strong></p>
  	  <p><?php echo $resultado[4]?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Telefone do Setor</strong></p>
  	  <p><?php echo $resultado[5]?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Celular Pessoal</strong></p>
  	  <p><?php echo $resultado[6]?></p>
    </div>
	
    <div class="col-md-4">
      <p><strong>E-Mail</strong></p>
  	  <p><?php echo $resultado[7]?></p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Salário</strong></p>
  	  <p><?php echo $resultado[8]?></p>
    </div>
	
	
 </div>
 
 <hr />
 
 <!-- criação de links para editar e excluir -->
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="index.php" class="btn btn-primary">Fechar</a>
    
  <!-- ao clicar, excluir assíncronamente -->
  <?php
	  echo "<a class='btn btn-default' id='".$resultado[0]."' onclick='excluir_assinc(this.id)'>Excluir</a>";
  ?>
   </div>
 </div>
 
<script>
  function excluir_assinc(bt_excluir){
    var async = new XMLHttpRequest();
		var dados = "idfuncionarios="+bt_excluir;

		async.open("POST", "excluir.php", true);
		async.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		async.send(dados);
		async.onreadystatechange = retorno;

		function retorno(){
			if(async.readyState == 4){
				if(async.status == 200){
					// Redirecionando o usuário para a página index
					window.location.href = "index.php";
				}else{
					window.alert("Algo deu errado no procedimento :(");
				}
			}
		}
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>