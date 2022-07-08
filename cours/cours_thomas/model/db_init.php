<?php

$read = __DIR__."/../config/config_db.conf";

$ini = parse_ini_file($read, true);

foreach ($ini as $key => $value) {
	define("_".$key, $value);	
}

try
{
	//$connexion = new PDO('mysql:host='._DB_HOST.';dbname='._DB_DATABASE.';charset=utf8', _DB_USER, _DB_PASSWORD);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>