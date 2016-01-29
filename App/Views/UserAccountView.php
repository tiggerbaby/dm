<?php

namespace App\Views;

class UserAccountView extends TemplateView
{
	
	public function render() 
	{
		// extract($this->data);
		$page = "User Account";
		$page_title = "Booking Manage";
		include "templates/master.inc.php";
	}
	protected function content()
	{
		// extract($this->data);
		include "templates/useraccount.inc.php";
		
	}
}