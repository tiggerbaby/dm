<?php

namespace App\Views;

class HostBusinessEmailView extends EmailView
{
	public function render() 
	{
		$this->sendEmail("templates/hostbusinessemail.inc.php");
		
	}
	
}