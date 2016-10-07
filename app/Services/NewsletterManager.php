<?php


namespace App\Services;


class NewsletterManager
{
	public function __construct(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function publish()
	{
		$this->mailer->send();
	}
}
