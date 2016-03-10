<?php

namespace App\Views;


class RestaurantSuggestView extends TemplateView
{
	public function render() {
		extract($this->data);
		$page = "restaurantsuggest";
		$page_title = "Suggest a restaurant";
		include "templates/master.inc.php";
	}
	protected function content() {
		extract($this->data);
		include "templates/restaurantsuggest.inc.php";
	}
}