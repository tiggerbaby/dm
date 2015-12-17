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
	protected function content() {
		extract($this->data);
		include "templates/about.inc.php";
	}

	
}