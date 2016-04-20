<?php
include('tools/Tool.php');

class Cliente{

	private $NomeCli; 
	private $SobrenomeCli; 
	private $RgCli;  	
	private $CpfCli; 
	private $EnderecoCli; 
	private $TelefoneCli; 
	private $CelularCli; 
	private $DataNascCli; 
	private $EmailCli;

	public function setNomeCli($nome){
		$this->NomeCli = $nome;
	}

	public function getNomeCli(){
		return $this->NomeCli;
	}

	public function setSobrenomeCli($sobreNome){
		$this->SobrenomeCli = $sobreNome;
	}

	public function getSobrenomeCli(){
		return $this->SobrenomeCli;
	}

	public function setRgCli($rg){
		$this->RgCli = $rg;
	}

	public function getRgCli(){
		return $this->RgCli;
	}

	public function setCpfCli($cpf){
		$this->CpfCli = $cpf;
	}

	public function getCpfCli(){
		return $this->CpfCli;
	}

	public function setEnderecoCli($endereco){
		$this->EnderecoCli = $endereco;
	}

	public function getEnderecoCli(){
		return $this->EnderecoCli;
	}

	public function setTelefoneCli($telefone){
		$this->TelefoneCli = $telefone;
	}

	public function getTelefoneCli(){
		return $this->TelefoneCli;
	}

	public function setCelularCli($celular){
		$this->CelularCli = $celular;
	}

	public function getCelularCli(){
		return $this->CelularCli;
	}

	public function setDataNascCli($datanasc){
		$this->DataNascCli = $datanasc;
	}

	public function getDataNascCli(){
		return $this->DataNascCli;
	}

	public function setEmailCli($email){
		$this->EmailCli = $email;
	}

	public function getEmailCli(){
		return $this->EmailCli;
	}


	public function create(){
		$tool = new Tool;
		$conn = $tool->getConnection();

		if($conn){
			$insert = "INSERT INTO clientes (nome, sobrenome, rg, cpf, endereco, telefone, celular, data_nasc, email) 
			VALUES ('".$this->NomeCli."','". $this->SobrenomeCli."','". $this->RgCli."','". $this->CpfCli."','". $this->EnderecoCli."','". $this->TelefoneCli."','". $this->CelularCli."','". $this->DataNascCli."','". $this->EmailCli."')";

			if(mysql_query($insert,$conn)){
				echo"<script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso!');window.location.href='clientes.php'</script>";
			}else{
				echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse cliente');window.location.href='clientes.php'</script>";
			}

		}

	}

	public function lista($busca){
		$tool = new Tool;
		$conn = $tool->getConnection();

		if($conn){
			$select = mysql_query("SELECT * FROM clientes WHERE nome LIKE '%".$busca."%' OR sobrenome LIKE '%".$busca."%'") OR DIE(mysql_error());
			$numreg = mysql_num_rows($select);			 
               
                if(empty($busca)) { echo "Campo de busca está vazio!";}
                else{	


                while ($resultado = mysql_fetch_array($select)) {

                	

                	echo "Lista de Clientes:"."<br />";
	                $id = $resultado['id'];
	                $nome = $resultado['nome'];
	                $sobrenome = $resultado['sobrenome'];
	                $rg = $resultado['rg'];
	                $cpf = $resultado['cpf'];
	                $endereco = $resultado['endereco'];
	                $telefone = $resultado['telefone'];
	                $celular = $resultado['celular'];
	                $datanasc = $resultado['data_nasc'];
	                $email = $resultado['email'];



	                echo "<br />"."ID: ".$id."<br />",
	                			"Nome: ".$nome."<br />", 
	                			"Sobrenome: ".$sobrenome."<br />",
	                			"RG: ".$rg."<br />", 
	                			"CPF: ".$cpf."<br />", 
	                			"Endereço: ".$endereco."<br />", 
	                			"Telefone: ".$telefone."<br />", 
	                			"Celular: ".$celular."<br />", 
	                			"Data de Nascimento: ".$datanasc."<br />",
	                			"Email: ".$email."<br />";
	            }
				}	

			  if ($numreg == 0) {
                		echo "Cliente não encontrado!";
                	}

	

		}

		else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível encontrar clientes');window.location.href='buscaClientes.php'</script>";
		}

	}

	public function remove(){
		$tool = new Tool;
		$conn = $tool->getConnection();

		if($conn){
			$remove = "DELETE FROM clientes WHERE id=$id";
			echo "FUDEU!!!!!!!!!";
		}
	}

}

?>