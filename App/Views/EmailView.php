<?php

namespace App\Views;

use Mailgun\Mailgun;

abstract class EmailView extends View
{
	public function sendEmail($templateFile)
	{
		extract($this->data);
		# Instantiate the client.
		$mgClient = new Mailgun('key-fb92599e8833d28ec7fa06aa8195760f');
		$domain = "sandbox412204f09df446ba9a9441b9c93a8985.mailgun.org";

		ob_start();

		include $templateFile;

		$emailBody = ob_get_clean();

		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
		    'from'    => $emailHeader['from'],
		    'to'      => $emailHeader['to'],
		    'subject' => $emailHeader['subject'],
		    'text'    => $emailBody
		));
	}
}

