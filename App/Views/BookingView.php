<?php

namespace App\Views;

class BookingView extends TemplateView
{
	
	public function render() 
	{
		// extract($this->data);
		$page = "booking";
		$page_title = "Booking";
		include "templates/master.inc.php";
	}
	protected function content()
	{
		// extract($this->data);
		include "templates/booking.inc.php";
	}
}