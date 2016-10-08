<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Sat Oct  8 19:29:59 WEST 2016
//


namespace App\Providers;


use App\Services\Quote;


class Quoteprovider extends Provider
{
	/**
	 * Register quote provider.
	 *
	 * @return void
	 */
	public function register()
	{
		return $this->container
			->register('quote', Quote::class);
	}
}
