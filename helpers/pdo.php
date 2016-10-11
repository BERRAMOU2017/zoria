<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Tue Oct 11 20:25:01 WEST 2016
//


if (!function_exists('pdo')) {
	/**
	 * Get PDO instance.
	 *
	 * @return PDO
	 */
	function pdo()
	{
		return Zoria\Framework\DB::getInstance()
			->pdo();
	}
}
