<?php


namespace App\Providers;


use App\Services\NewsletterManager;
use Symfony\Component\DependencyInjection\Reference;


class NewsletterManagerProvider extends Provider
{
	public function register()
	{
		$this
			->container
			->register('newsletter_manager', NewsletterManager::class)
			->addArgument(new Reference('mailer'));
	}
}
