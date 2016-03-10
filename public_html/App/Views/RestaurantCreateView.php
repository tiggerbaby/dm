<?php

namespace App\Views;

class RestaurantCreateView extends TemplateView
{
	
	public function render() 
	{
		extract($this->data);
		$page = "restaurant.create";
		$page_title = "Add New Restaurant";
		include "templates/master.inc.php";
	}
	protected function content()
	{
		extract($this->data);
		include "templates/restaurantcreate.inc.php";
	}
}