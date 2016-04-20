<?php
include ("model/Cliente.php");

	echo "Funciona!! <br /><br /><br />";

	 $form_data = filter_input_array( INPUT_POST, [
	 	'NomeCli' => FILTER_SANITIZE_STRING,	
	 	'SobrenomeCli' => FILTER_SANITIZE_STRING,
	 	'RgCli' => FILTER_SANITIZE_STRING,	 	
	 	'CpfCli' => FILTER_SANITIZE_STRING,
	 	'EnderecoCli' => FILTER_SANITIZE_STRING,
	 	'TelefoneCli' => FILTER_SANITIZE_STRING,
	 	'CelularCli' => FILTER_SANITIZE_STRING,
	 	'DataNascCli' => FILTER_SANITIZE_STRING,
	 	'EmailCli' => FILTER_SANITIZE_EMAIL
	    ]);

	 extract($form_data);


	 $cli = new Cliente;
	 $cli->setNomeCli($NomeCli);
	 $cli->setSobrenomeCli($SobrenomeCli);
	 $cli->setRgCli($RgCli);
	 $cli->setCpfCli($CpfCli);
	 $cli->setEnderecoCli($EnderecoCli);
	 $cli->setTelefoneCli($TelefoneCli);
	 $cli->setCelularCli($CelularCli);
	 $cli->setDataNascCli($DataNascCli);
	 $cli->setEmailCli($EmailCli);

	 echo $cli->getNomeCli().'<br />';
	 echo $cli->getSobrenomeCli().'<br />';
	 echo $cli->getRgCli().'<br />';
	 echo $cli->getCpfCli().'<br />';
	 echo $cli->getEnderecoCli().'<br />';
	 echo $cli->getTelefoneCli().'<br />';
	 echo $cli->getCelularCli().'<br />';
	 echo $cli->getDataNascCli().'<br />';
	 echo $cli->getEmailCli().'<br />';

	 $cli->create();

?>