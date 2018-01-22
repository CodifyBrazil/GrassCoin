<?php
require 'environment.php';


global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') { //Ambiente de Desenvolvimento
	define("BASE_URL", "http://127.0.0.1/GrassCoin/");//BASE_URL
	$config['dbname'] = 'GrassCoin';
	$config['host'] = 'localhost';//Sua conexao remota
	$config['dbuser'] = 'root';//Usuario BD
	$config['dbpass'] = '';//Senha
} else {
	//Ambiente Online
	define("BASE_URL", "http://127.0.0.1/nova_loja_2.0/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['default_lang'] = 'us';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>