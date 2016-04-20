<?php

class Tool{

	public $connection;
	public $database;

 	public function getConnection(){

 		// Mensagens de Erro
		$msg[0] = "Conexão com o banco de dados falhou!";
		$msg[1] = "Não foi possível selecionar o banco de dados!";
			
		// Fazendo conexão com o servidor MySQL
		$this->connection = mysql_connect('bdsql01.stoinacio.com.br','13100213','13100213') or die($msg[0]);
		$this->database = mysql_select_db('13100213') or die($msg[1]);

		return $this->connection;
 	}

 	public function getDatabase(){
 		return $this->database;
 	}


}


?>