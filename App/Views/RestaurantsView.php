<?php

namespace App\Views;


class RestaurantsView extends TemplateView
{
	public function render() {
		
		$page = "restaurants";
		$page_title = "Restaurants";
		include "templates/master.inc.php";
	}
	protected function content() {
		
		include "templates/restaurants.inc.php";
	}
}