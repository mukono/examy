<?php
require '../vendor/autoload.php';
$conn = require'connection.php';
$app = new \Slim\App($conn);
$container = $app->getContainer();
$container['db'] = function($c){
	$setting = $c->get('setting')['dblocal'];
	
	$PDO = new PDO(
	"mysql:host={$setting['host']};
	       dbname={$setting['dbname']}",
		   "{$setting['user']}",
		   "{$setting['pass']}"
	);
	return $PDO;
};
       require_once('endpoints.php');
$app->run();
?>