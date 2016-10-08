<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Sat Oct  8 19:26:47 WEST 2016
//


namespace App\Services;


class Quote
{
	protected $quotes = [
		'zoria',
	];

	/**
	 * Get a random quote.
	 *
	 * @return string
	 */
	public function random()
	{
		return $this->quotes[mt_rand(0, count($this->quotes) - 1)];
	}
}
