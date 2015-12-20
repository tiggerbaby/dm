<?php

namespace App\Views;


class RegisterSuccessView extends TemplateView
{
	public function render() {
		
		$page = "registersuccess";
		$page_title = "Account created";
		include "templates/master.inc.php";
	}
	protected function content() {
			include "templates/registersuccess.inc.php";
	}
}