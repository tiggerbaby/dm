<?php

namespace App\Controllers;

use App\Views\RestaurantSuggestView;
use App\Models\RestaurantModel;
// use App\Views\SuggesterEmailView;
// use App\Views\HostEmailView;
// use App\Views\RestaurantSuggestSuccessView;

class RestaurantSuggestController extends Controller
{  
	public function show()
	{
		$restaurants = new RestaurantModel();
		$view = new RestaurantSuggestView(compact('restaurant'));
		$view-> render();
	}
	public function store()
	{
		var_dump($_POST);
		$restaurants = new RestaurantModel($_POST);
		// var_dump($restaurants);
		$restaurants -> save();

		
	}
	
}