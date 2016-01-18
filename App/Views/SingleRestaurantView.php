<?php

namespace App\Views;

class SingleRestaurantView extends TemplateView
{
	
	public function render() 
	{
		extract($this->data);
		$page = "restaurant";
		$page_title = $restaurant->title;
		include "templates/master.inc.php";
	}
	protected function content()
	{
		extract($this->data);
		include "templates/singlerestaurant.inc.php";
		
	}
}