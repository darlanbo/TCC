<html>
<head>
<meta charset=utf-8>
<?php
include ("model/Cliente.php");
?>
</head>
<body>
<?php
if(isset($_POST['busca'])){
	$parametro = $_POST['busca'];
}

?>
	<h3>Busca Cliente por Nome ou Sobrenome</h3>
        <form action="buscaClientes.php" name="buscaCliente" method="POST">
            <table style="margin: 0 ; font-family: Arial;">
                <tr>
                    <td>Digite o nome ou sobrenome que deseja buscar:</td>
                </tr>
                <tr>
                    <td><input type="text" size="40" name="busca"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="enviar" value="Buscar"/>
    				</td>
                </tr>                    
            </table>
          <?php
   if(isset($parametro)){
   	    $cli = new Cliente;
		$cli->lista($parametro);
		unset($_POST['busca']);
   }
	?>
</body>
</html>