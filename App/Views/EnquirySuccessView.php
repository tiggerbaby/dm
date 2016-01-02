<?php

namespace App\Views;


class EnquirySuccessView extends TemplateView
{
	public function render() {
		extract($this->data);
		$page = "businessenquiry";
		$page_title = "Business Enquiry";
		include "templates/master.inc.php";
	}
	protected function content() {
		extract($this->data);
		include "templates/enquirysuccess.inc.php";
	}
}