<?php

namespace App\Controllers;

use App\Views\RestaurantsView;
use App\Models\RestaurantModel;
use App\Views\SingleRestaurantView;

class RestaurantsController 
{   
	public function index()
	{ 
	    $restaurants = RestaurantModel::all();
		$view = new RestaurantsView(['restaurants' => $restaurants]);
		$view-> render();
	}

	public function show()
	{
		$restaurant = new RestaurantModel((int)$_GET['id']);
		$view = new SingleRestaurantView(['restaurant' => $restaurant]);
		$view->render();
	}

}