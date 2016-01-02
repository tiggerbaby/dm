<?php

namespace App\Controllers;

use App\Views\RestaurantsView;
use App\Models\RestaurantModel;

class RestaurantsController 
{
	public function show()
	{ 
	    $restaurants = RestaurantModel::all();
		$view = new RestaurantsView(['products' => $products]);
		$view-> render();
	}

}