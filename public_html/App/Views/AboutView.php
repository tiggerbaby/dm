<?php

namespace App\Views;


class AboutView extends TemplateView
{
	public function render() {
		extract($this->data);
		$page = "about";
		$page_title = "About Us";
		include "templates/master.inc.php";
	}
	// public function rendersuccess() {
	// 	extract($this->data);
	// 	$page = "enquiry";
	// 	$page_title = "Enquiry Form";
	// 	include "templates/enquirysuccess.inc.php";
	// }
	protected function content() {
		extract($this->data);
		include "templates/about.inc.php";
	}

	
}