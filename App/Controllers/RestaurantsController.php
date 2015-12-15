<?php

namespace App\Controllers;

use App\Views\RestaurantsView;

class RestaurantsController 
{
	public function show()
	{ 
	
		$page = "restaurantsuggest";
		$view = new RestaurantsView(compact('page'));
		$view-> render();
	}
}