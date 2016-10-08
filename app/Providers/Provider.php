<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Sat Oct  8 19:28:57 WEST 2016
//


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
