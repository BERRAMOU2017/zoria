<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Tue Oct  4 21:51:24 WEST 2016
//


use Zoria\Framework\Render;


if (!function_exists('render')) {
	/**
	 * Render view
	 */
	function render($data, $params, $debug)
	{
		global $container;

		$views = __DIR__ . '/../resources/views';
		$cache = __DIR__ . '/../storage/views';

		echo (new Render($container, $views, $cache, $data, $params, $debug))
			->render();
	}
}
