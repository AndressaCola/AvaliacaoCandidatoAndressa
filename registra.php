<?php

require_once 'conexao_bd.php';

$cliente = $_POST['cliente'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano_modelo = $_POST['ano-modelo'];
$ano_fabricacao = $_POST['ano-fabricacao'];
$funcionario = $_POST['funcionario'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];

$objtDb = new db();
$link = $objtDb->conecta_mysql();

$sql_cliente = "INSERT INTO cliente (Nome, CPF, Telefone, Endereco) VALUES ('$cliente','$cpf','$telefone','$endereco')";

$sql_veiculo = "INSERT INTO veiculo (Placa, Marca, Modelo, AnoModelo, AnoFabricacao) VALUES ('$placa','$marca','$modelo','$ano_modelo','$ano_fabricacao')";

$sql_servico = "INSERT INTO servico (Nome, Descricao, Valor) VALUES ('$funcionario','$descricao','$valor')";

//executar a query
mysqli_query($link, $sql_cliente);
mysqli_query($link, $sql_veiculo);
mysqli_query($link, $sql_servico);

return require_once 'index.php';


 ?>
 
