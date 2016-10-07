<?php


namespace App\Services;


class Mailer
{
	protected $transport;

	public function __construct($transport)
	{
		$this->transport = $transport;
	}

	public function send()
	{
		return 'transport: ' . $this->transport;
	}
}
