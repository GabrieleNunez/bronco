<?php
$env = array(
	'debug' => true,
	'domain' => 'websitehere',
	'viewcache' => '../tmp/views',
	'bronco_cache' => true,
	'mailer' => array(
		'smtp' => false,
		'username' => '',
		'password' => '',
		'host' => '',
		'protocol' => 'tls',
		'port' => '',
		'from' => 'noreply@websitehere.com',
		'name' => 'Website Here',
		'html' => true
	),
	'folders' => array(
		'views' => '../App/Views',
		'public' => '../public_html/',
		'migration' => '../Migration/',
	),
	'files' => array(
		'routes' => '../App/Conf/routes.php',
		'database' => '../App/Conf/database.php'
	),
	'vendor' => array(
		'Mustache' => '../vendor/Mustache/'
	),
    'memcached' => array(
        'host' => 'localhost',
        'port' => 11211
    ),
);
?>