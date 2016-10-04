<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Tue Oct  4 21:51:24 WEST 2016
//


if (!function_exists('render')) {
	/**
	 * Render view
	 */
	function render($view)
	{
		$loader = new Twig_Loader_Filesystem(__DIR__ . '/../resources/views');
		$twig = new Twig_Environment($loader, [ 'cache' => __DIR__ . '/../storage/views' ]);

		$class = 'App\Data\\' . ucfirst($view) . 'Data';
		$viewData = new $class();
	
		echo $twig->render($view . '.twig', $viewData->get());
	}
}
