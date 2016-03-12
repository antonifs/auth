<?php

return [
	'app' => [
		'url' => 'http://slim.dev',
		'hash' => [
			'algo' => PASSWORD_BCRYPT,
			'cost' => 10
		]
	],

	'db' => [
		'driver' => 'mysql',
		'hosh' => '55.55.55.5',
		'name' => 'slim',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],

	'auth' => [
		'session' => 'user_id',
		'remember' => 'user_r'
	],

	'mail' => [
		'smtp_auth' => true,
		'smtp_secure' => 'tls',
		'host' => 'smtp.google.com',
		'username' => 'antoni.fs@google.com',
		'port' => '587',
		'html' => true
	],

	'twig' => [
		'debug' => true
	],

	'csrf' => [
		'session' => 'csrf_token'
	]
];
