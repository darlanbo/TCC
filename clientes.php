<html>
<?php 
include('tools/Tool.php');
    date_default_timezone_set('America/Sao_Paulo');
	$data_de_hoje = date('d/m/Y'); 
?>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
</head>
<body>
	<h1>Formulário para Cadastro de Cliente</h1> <p>Hoje é dia: <?php echo $data_de_hoje?></p>
	 <table border="1" style="width:50%">
		  <form action="cadastraCliente.php" method="post">
			  Nome:<br>
  			<input type="text" name="NomeCli"><br>
 			  Sobrenome:<br>
  			<input type="text" name="SobrenomeCli"><br>
  			Rg:<br>
  			<input type="text" name="RgCli"><br>
  			Cpf:<br>
  			<input type="text" name="CpfCli"><br>
  			Endereço:<br>
  			<input type="text" name="EnderecoCli"><br>
  			Telefone<br>
  			<input type="text" name="TelefoneCli"><br>
  			Celular:<br>
  			<input type="text" name="CelularCli"><br>
  			Data de Nascimento:<br>
  			<input type="text" name="DataNascCli"><br>
  			Email:<br>
  			<input type="email" name="EmailCli"><br>
  			<input type="submit" value="Enviar">
		</form>
	</table> 
</body>
</html>