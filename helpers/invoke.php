<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 13:20:59 WEST 2016
//


use Zoria\Framework\Reflection;


if (!function_exists('register')) {
	/**
	 * Add class to the container using Reflection API.
	 *
	 * @param $class
	 *
	 * @return object
	 */
	function invoke($class, $params)
	{
		global $container;

		return (new Reflection($container, $class, $params))
			->invoke();
	}
}
