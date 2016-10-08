<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 10:54:33 WEST 2016
//


require_once __DIR__ . '/vendor/autoload.php';


use Zoria\Framework\Route;
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

$routes = require_once __DIR__ . '/routes/web.php';
$route = new Route($routes);
$data = $route->getData();
$params = $route->getParams();

render($data, $params, getenv('DEBUG'));
