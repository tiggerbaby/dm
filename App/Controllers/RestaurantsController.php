<?php

namespace App\Controllers;

use App\Views\RestaurantsView;
use App\Models\RestaurantModel;

class RestaurantsController 
{
	public function show()
	{ 
	    $restaurants = RestaurantsModel::all();
		$view = new RestaurantsView();
		$view-> render();
	}

}