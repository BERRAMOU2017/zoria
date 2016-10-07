<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 13:20:59 WEST 2016
//


if (!function_exists('register')) {
	/**
	 * Add class to the container using Reflection API.
	 *
	 * @param $class
	 *
	 * @return object
	 */
	function instance($class)
	{
		global $container;

		$r = new ReflectionClass($class);
		$params = [];

		foreach ($r->getMethods() as $m) {
			if ($m->name !== '__construct') {
				continue;
			}

			foreach ($m->getParameters() as $p) {
				$c = $p->getClass();

				if ($c) {
					preg_match('/.*\\\(.*)$/', $c->name, $match);

					if (isset($match[1])) {
						$class_name = $match[1];
					} else {
						$class_name = $c->name;
					}

					$params[] = $container->get(snake($class_name));
				}
			}
		}

		return $r->newInstanceArgs($params);
	}
}
