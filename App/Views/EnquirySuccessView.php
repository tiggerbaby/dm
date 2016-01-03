<?php

namespace App\Views;


class EnquirySuccessView extends TemplateView
{
	public function render() {
		$page = "businessenquiry";
		$page_title = "Business Enquiry Success";
		include "templates/master.inc.php";
	}
	protected function content() {
		include "templates/enquirysuccess.inc.php";
	}
}

