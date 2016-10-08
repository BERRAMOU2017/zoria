<?php


namespace App\Data;


use App\Services\Quote;
use App\Services\NewsletterManager;


class WelcomeData
{
	protected $quote;

	/**
	 * Initialize WelcomeData.
	 *
	 * @param Quote	$quote
	 */
	public function __construct(Quote $quote)
	{
		$this->quote = $quote;
	}

	/**
	 * Get data associated with welcome.twig view
	 *
	 * @return array
	 */
	public function get()
	{
		return [
			'quote' => $this->quote->random(),
		];
	}
}
