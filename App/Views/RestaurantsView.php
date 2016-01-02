<?php

namespace App\Views;

class RestaurantsView extends TemplateView
{
	public function render() {
		
		extract($this->data);
		$page = "restaurants";
		$page_title = "Restaurants";
		include "templates/master.inc.php";
	}
	protected function content() {
		extract($this->data);
		include "templates/restaurants.inc.php";

	}
}