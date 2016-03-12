<?php

use Slim\Slim;

require  '../vendor/autoload.php';

$app = new Slim();

// Database
$app->container->singleton("db", function(){
	return new PDO("mysql:host=127.0.0.1;dbname=project", "root", "root");
});

$app->get("/", function() {
	echo "Hello there";
});

$app->get("/flight", function() {
	echo "Hello flight";
});

$app->get("/yo", function() {
	echo "Hello yo";
});

$app->run();