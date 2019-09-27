<html>
<head>
<style>
fieldset{width:600px;margin:auto;}
</style>
<title>Cadastro de Cliente</title>
</head>

<body>
<form method="POST" 
action="inserirDadosCliente.php">
<fieldset>
<legend>Cadastro de Cliente</legend>
Nome:<input type="text" name="cxnome"><br>
Idade:<input type="text" name="cxidade"><br>
Data de Nascimento:
<input type="date" name="cxdn"><br>
Salário:<input type="text" name="cxsalario"><br>
Altura:<input type="text" name="cxaltura"><br>




<input type="submit" value="Cadastrar">

</fieldset>
</form>
<a href="listarDadosCliente.php">Listar dados cadastrado</a>
</body>
</html>

