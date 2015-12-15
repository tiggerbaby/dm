<?php

namespace App\Controllers;

use App\Views\RestaurantSuggestSuccessView;

class RestaurantSuggestSuccessController 
{
	public function show()
	{
		$view = new RestaurantSuggestSuccessView();
		$view->render();
	}
}