<?php


namespace App\Providers;


abstract class Provider
{
	protected $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	abstract function register();
}
