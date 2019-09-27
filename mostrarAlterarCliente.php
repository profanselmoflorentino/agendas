<html>
<head>
<style>
fieldset{width:600px;margin:auto;}
</style>
<title>Cadastro de Dados</title>
</head>

<body>
<?php
	include_once 'conexao.php';
	
	$id = $_GET['id'];
	
	$consulta = "select *from tbcliente where codigo = '$id'";
	$executar = mysqli_query($conn,$consulta);

		while($exibir = mysqli_fetch_array($executar))
		{
		?>
<form method="POST" action="alterarDadosCliente.php">
	<input type="hidden" name="codigo" value="<?php echo $exibir['codigo'];?>">
	Nome:<input type="text" name="cxnome" value="<?php echo $exibir['nome'];?>">
	Idade:<input type="text" name="cxidade" value="<?php echo $exibir['idade'];?>">
	Data de Nascimento:<input type="date" name="cxdn" value="<?php echo $exibir['datanasc'];?>">
	Salário:<input type="text" name="cxsalario" value="<?php echo $exibir['salario'];?>">
	Altura:<input type="text" name="cxaltura" value="<?php echo $exibir['altura'];?>">
	
	<input type="submit" value="Alterar">
	</form>
	
	<?php } ?>
	


</body>
</html>