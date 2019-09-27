<?php

	include_once 'conexao.php';
	
	$id = $_POST['codigo'];
	$nome = $_POST['cxnome'];
	$idade = $_POST['cxidade'];
	$dnas = $_POST['cxdn'];
	$salario = $_POST['cxsalario'];
	$altura = $_POST['cxaltura'];
	
	$alterar = "UPDATE tbcliente SET 
	nome = '$nome', 
	idade = '$idade',
	datanasc = '$dnas',
	salario = '$salario',
	altura = '$altura'
	where codigo = '$id'";

	$executar = mysqli_query($conn,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarDadosCliente.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	
?>