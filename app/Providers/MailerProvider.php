<?php


namespace App\Providers;


use App\Services\Mailer;


class MailerProvider extends Provider
{
	public function register()
	{
		$this
			->container
			->register('mailer', Mailer::class)
			->addArgument('sendmail');
	}
}
