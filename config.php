<?php
require 'environment.php';

global $config;
$config = array();
define('BASE_URL','http://localhost/site/index.php');
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'institucional';
        #$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '475236';
} else {
	$config['dbname'] = 'institucional';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '475236';
}
?>