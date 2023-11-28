<!--
	Gabriel Novais
	28/11/2023
	Projeto CRM. Cadastra funcionários e exclui de maneira assíncrona
-->
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
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
						aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">CRM Registro Funcionários</a>
				</div>

			</div>
		</nav>

		<div id="main" class="container-fluid" style="margin-top: 50px">

			<div id="top" class="row">
				<div class="col-sm-3">
					<h2>Funcionários</h2>
				</div>
				<div class="col-sm-6">

					<!-- implementar busca com filtro pelo nome -->

					<div class="input-group h2">
						<!-- input para acrescentar método de busca assíncrona por digitação de letra -->
						<input name="busca" onkeyup="consult_resultados()" class="form-control" id="search" type="text"
							placeholder="Pesquisar Itens">

						<!-- fim input -->
						<span class="input-group-btn">

							<!-- input para acrescentar método de busca assíncrona por clique -->
							<input class="btn btn-primary" onclick="consult_resultados()" type="submit" value="Buscar">
							<!-- fim input -->
							<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>

					</div>


				</div>
				<div class="col-sm-3">
					<a href="add.html" class="btn btn-primary pull-right h2">Cadastrar Novo</a>
				</div>
			</div>

			<hr />
			<div id="list" class="row">

				<div class="table-responsive col-md-12">
					<table class="table table-striped" cellspacing="0" cellpadding="0">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Formação</th>
								<th>Setor</th>
								<th class="actions">Ações</th>
							</tr>
						</thead>
						<!-- tabela: área editável. Exibir aqui todos os cadastrados no banco com a função assíncrona-->
						<tbody id="tabelaExibir">
							<?php
								include('conexao.php');

								$busca = mysqli_query($con, "SELECT idfuncionarios, nome, formacao, setor FROM funcionarios;");
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
									$id_func = $resultado[0];
									}
								}
							?>
							<!-- tabela: fim da área editável -->
						</tbody>
					</table>

					<!-- Script que faz funcionar a assincronicidade -->
					<script>
						function consult_resultados() {
							var busca = document.getElementById('search').value;// Pega o campo de busca
							var async = new XMLHttpRequest();// Armazenando a função que permite transferir dados entre cliente-servidor
							var dados = "busca_dados=" + busca;
							var tabela = document.getElementById('tabelaExibir');

							async.open("POST", "busca_assincrona.php", true);// Iniciando uma nova requisição via POST com o arquivo busca_assincrona.php
							async.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");// Definindo o valor do cabeçalho
							async.send(dados);// Enviando requisição para o servidor
							async.onreadystatechange = mostrar_dados;

							function mostrar_dados() {
								if (async.readyState == 4) {
									if(async.status == 200){
										tabela.innerHTML = async.responseText;
									}else{
										window.alert("Algo deu errado no procedimento :(");
									}
								}
							}
						}
						function excluir_assinc(bt_excluir){
							var async = new XMLHttpRequest();
							var dados = "idfuncionarios="+bt_excluir;

							async.open("POST", "excluir_assincrona.php", true);
							async.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							async.send(dados);
							async.onreadystatechange = retorno;

							function retorno(){
								if(async.readyState == 4){
									if(async.status == 200){
										// Chamando a função para fazer a busca e imprimir novamente na tabela
										consult_resultados();
									}else{
										window.alert("Algo deu errado no procedimento :(");
									}
								}
							}
						}
					</script>
				</div>
			</div>
		</div>



		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>