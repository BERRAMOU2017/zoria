<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 15:00:05 WEST 2016
//


if (!function_exists('snake')) {
	/**
	 * Convert OussamaElgoumri to oussama_elgoumri
	 *
	 * @param $value
	 *
	 * @return string
	 */
	function snake($value)
	{
		return strtolower(trim(preg_replace('/([A-Z]+)/', '_$0', $value), '_'));
	}
}
