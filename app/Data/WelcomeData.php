<?php


namespace App\Data;


use App\Services\Mailer;
use App\Services\NewsletterManager;


class WelcomeData
{
	protected $mailer;

	public function __construct(Mailer $mailer, NewsletterManager $nm)
	{
		$this->mailer = $mailer;
	}

	/**
	 * Get data associated with welcome.twig view
	 *
	 * @return array
	 */
	public function get()
	{
		return [
			'name' => $this->mailer->send(),
		];
	}
}
