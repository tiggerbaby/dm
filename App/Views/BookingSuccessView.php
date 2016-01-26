<?php

namespace App\Views;


class BookingSuccessView extends TemplateView
{
	public function render() {
		$page = "businessenquiry";
		$page_title = "Business Enquiry Success";
		include "templates/master.inc.php";
	}
	protected function content() {
		include "templates/bookingsuccess.inc.php";
	}
}

