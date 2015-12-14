<?php

namespace App\Views;


class RestaurantSuggestView extends TemplateView
{
	public function render() {
		
		$page = "restaurantsuggest";
		$page_title = "Suggest a restaurant";
		include "templates/master.inc.php";
	}
	protected function content() {
		
		include "templates/restaurantsuggest.inc.php";
	}
}