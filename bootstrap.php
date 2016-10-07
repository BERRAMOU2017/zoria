<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 10:54:33 WEST 2016
//


require_once __DIR__ . '/vendor/autoload.php';


use Symfony\Component\DependencyInjection\ContainerBuilder;


(new Dotenv\Dotenv(__DIR__))
	->load();

global $container;
$container = new ContainerBuilder();
$providers = require_once __DIR__ . '/app/Providers/loader.php';


foreach ($providers as $provider) {
	$provider = new $provider($container);
	$provider->register();
}


require_once __DIR__ . '/app/routes.php';
