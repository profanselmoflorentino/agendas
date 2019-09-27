<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbcliente where codigo='$id' ";
	$executar = mysqli_query($conn,$excluir);
	if($executar)
	{
		echo "Cliente excluido com sucesso";
		echo "<br>";
		echo "<a href='listarDadosCliente.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
?>