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
	$consultar = "select *from tbcliente";
	$executar = mysqli_query($conn,$consultar);
?>
<div id="listar">
	<?php
		while($linha = mysqli_fetch_array($executar))
		{
		?>
	
	Nome:<input type="text" value="<?php echo $linha["nome"];?>" readonly >
	Idade:<input type="text" value="<?php echo $linha["idade"];?>" readonly>
	Data de Nascimento:<input type="date" value="<?php echo $linha["datanasc"];?>" readonly>
	Salário:<input type="text" value="<?php echo $linha["salario"];?>" readonly>
	Altura:<input type="text" value="<?php echo $linha["altura"];?>" readonly>
	
	<a 
	href="mostrarAlterarCliente.php?id=<?php echo $linha["codigo"];?>">Alterar</a>
	<a href="excluirDadosCliente.php?id=<?php echo $linha["codigo"];?>">Excluir</a>
	
	
	<br/>
	
	
	
	<?php } ?>
	<a href="index.php">Voltar</a>
</div>

</body>
</html>