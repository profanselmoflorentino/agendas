<?php

	if($_POST['cxnome'] != "")
	{
		include_once 'conexao.php';
		
		$nome = $_POST['cxnome'];
		$idade = $_POST['cxidade'];
		$dnas = $_POST['cxdn'];
		$salario = $_POST['cxsalario'];
		$altura = $_POST['cxaltura'];
		
		$sql = "insert into tbcliente (nome,idade,datanasc,salario,altura) 
		values ('$nome','$idade','$dnas','$salario',
		'$altura')";
		$query = mysqli_query($conn,$sql);
		echo "Dados cadastrado com sucesso";
	}
	else
	{
		echo "Dados não cadastrado";
	}

?>
<a href="index.php">Voltar</a>