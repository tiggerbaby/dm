<?php

namespace App\Controllers;

use App\Views\RestaurantsView;

class RestaurantsController 
{
	public function show()
	{
		$view = new RestaurantsView();
		$view-> render();
	}
}