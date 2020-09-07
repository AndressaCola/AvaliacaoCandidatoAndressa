<?php
//Registrando os dados do formulario no banco de dados
require_once 'conexao_bd.php';

$sql_cliente = "SELECT * FROM cliente";

$sql_veiculo = "SELECT * FROM veiculo";

$sql_servico = "SELECT * FROM servico";

$objtDb = new db();
$link = $objtDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql_cliente);

if($resultado_id){
    $dados_cliente = array();

   while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
    $dados_cliente[] = $linha;
   }

   foreach($dados_cliente as $cliente){
       echo $cliente['Nome'];
   }

}else{
    echo 'Erro de execução da consulta';
}

 ?>
 