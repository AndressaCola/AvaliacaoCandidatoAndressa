<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Mega Laudo</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

		<style>
			.tab-content{
				margin:15px;
			}

		</style>
	
		<script>
				$(document).ready(function(){
					$("#myInput").on("keyup", function() {
						var value = $(this).val().toLowerCase();
					$("#myTable tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
					});
				});	

				
					
		</script>
	</head>

	<body>

	<div class="jumbotron">
		<div class="container">
				<h1 class="display-4">Mega Laudo</h1>
				<p class="lead">Sistema de Vistoria e Laudo Cautelar</p>
		</div>
	</div>
	<!-- finaliza o jumbotron -->

	<!-- container principal -->
	<div class="container" style="background-color: #eee">
		
		<ul class="nav nav-tabs" id="myTab" role="tablist">

		
			<!--Aba 1-->
			<li class="nav-item">
				<a class="nav-link" id="servico-tab" data-toggle="tab" href="#servico" role="tab" aria-controls="servico" aria-selected="true">Lista de Serviços</a>
			</li>
			<!--Aba 2-->
			<li class="nav-item">
				<a class="nav-link" id="novo-servico-tab" data-toggle="tab" href="#novo-servico" role="tab" aria-controls="novo-servico" aria-selected="false">Novo Serviço</a>
			</li>
			<!--Aba 3-->
			<li class="nav-item">
				<a class="nav-link" id="pesquisar-tab" data-toggle="tab" href="#pesquisar" role="tab" aria-controls="pesquisar" aria-selected="false">Pesquisar Serviços</a>
			</li>
		</ul>
		
		<div class="tab-content" id="myTabContent">
		
			<!--Conteudo Aba 1-->
			<div class="tab-pane fade" id="servico" role="tabpanel" aria-labelledby="servico-tab">
				
					<table class="table table-bordered">
						<thead>
							<tr>
							<th scope="col">Código do Serviço</th>
							<th scope="col">Cliente</th>
							<th scope="col">Placa do Veículo</th>
							<th scope="col">Funcionário</th>
							<th scope="col">Valor</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>HTT-5330</td>
							<td>Jorge</td>
							<td>R$200,00</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>MCH-9385</td>
							<td>Jorge</td>
							<td>R$200,00</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td>Larry the Bird</td>
							<td>KJM-3477</td>
							<td>Vitoria</td>
							<td>R$200,00</td>
							</tr>
							<th scope="row">4</th>
							<td>Woyfo</td>
							<td>JPC-0782</td>
							<td>Jorge</td>
							<td>R$200,00</td>
							</tr>
						</tbody>
					</table>

			</div>

			<!--Conteudo Aba 2-->
			<div class="tab-pane fade" id="novo-servico" role="tabpanel" aria-labelledby="novo-servico-tab">
			
				<form method="post" action="registra.php" id="cadastro-servico">
					
						<h2>Dados do Cliente</h2>

							<div class="form-group col-md-9">
							<label for="cliente">Nome</label>
							<input type="text" class="form-control" name="cliente" id="cliente" placeholder="Nome Completo">
							</div>

							<div class="form-group col-md-3">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" name="cpf" id="cpf" placeholder="xxx.xxx.xxx.-xx" >
							</div>
						
							<div class="form-group col-md-3 ">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" onkeypress="$(this).mask('(00) 90000-0000')" name="telefone" id="telefone" placeholder="(00) 90000-0000">
							</div>

							<div class="form-group col-md-9">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua dos Bobos, nº 0">
							</div>
						
				
						<h2>Dados do Veículo</h2>

							<div class="form-group col-md-2">
							<label for="placa">Placa</label>
							<input type="text" class="form-control" name="placa" id="placa">
							</div>

							<div class="form-group col-md-2">
							<label for="marca">Marca</label>
							<input type="text" class="form-control" name="marca" id="marca" >
							</div>
						
							<div class="form-group col-md-4 ">
							<label for="modelo">Modelo</label>
							<input type="text" class="form-control" name="modelo" id="modelo">
							</div>

							<div class="form-group col-md-2">
							<label for="ano-modelo">Ano Modelo</label>
							<input type="number" class="form-control" name="ano-modelo" id="ano-modelo" onkeypress="$(this).mask('0000')" placeholder="2020">
							</div>

							<div class="form-group col-md-2">
							<label for="ano-fabricacao">Ano Fabricação</label>
							<input type="number" class="form-control" onkeypress="$(this).mask('0000')" placeholder="2020" name="ano-fabricacao" id="ano-modelo">
							</div>
						
						<h2>Serviço</h2>

							<div class="form-group col-md-6">
							<label for="funcionario">Nome</label>
							<input type="text" class="form-control" name="funcionario" id="funcionario" placeholder="Nome Funcionário">
							</div>

							<div class="form-group col-md-6">
							<label for="valor">R$</label>
							<input type="text" class="form-control" name="valor" id="valor" onkeypress="$(this).mask('999.00')" placeholder="100.00">
							</div>

							<div class="form-group col-md-12">
							<label for="descricao">Descrição</label>
							<textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
							</div>					
						
						<button type="submit" class="btn btn-primary" name="btn-cadastrar" style="margin-left: 20px;">Cadastrar</button>

				</form>
			
			</div>
			<!--Conteudo Aba 3-->
			<div class="tab-pane fade" id="pesquisar" role="tabpanel" aria-labelledby="pesquisar-tab">
			

					<h2>Pesquisar Serviços</h2>

					<input class="form-control" id="busca-servicos" name="busca-servicos" type="text" placeholder="Busca de serviços">
					<br>
					<table class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>Código do Serviço</th>
							<th>Cliente</th>
							<th>Placa do Veículo</th>
							<th>Funcionário</th>
							<th>Valor</th>
						</tr>
						</thead>
						<tbody id="lista">
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>HTT-5330</td>
							<td>Jorge</td>
							<td>R$200,00</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>MCH-9385</td>
							<td>Vitoria</td>
							<td>R$200,00</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry the Bird</td>
							<td>KJM-3477</td>
							<td>Jorge</td>
							<td>R$200,00</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Woyfo</td>
							<td>JPC-0782</td>
							<td>Jorge</td>
							<td>R$200,00</td>
						</tr>

		


		</div>



	</div><!-- finaliza o container principal -->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>