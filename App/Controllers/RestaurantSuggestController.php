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
		$view = new RestaurantSuggestView(compact('restaurants'));
		$view-> render();
	}

	public function displayerror()
	{
		$restaurants = $this->getFormData();
		$view = new RestaurantSuggestView(compact('restaurants'));
		$view->render();
	}

	public function store()
	{
		var_dump($_POST);
		$restaurants = new RestaurantModel($_POST);
        
		if(! $restaurants->isValid()){
			var_dump($restaurants);
			$_SESSION['restaurant.suggest'] = $restaurants;
			header("Location: .\?page=restaurantsuggest.invalid");
			exit();
		}
		
		$restaurants -> save();
        header("Location: .\?page=restaurantsuggestsuccess");

		
	}
	public function getFormData($id = null){
		if(isset($_SESSION['restaurant.suggest'])){
			$restaurants = $_SESSION['restaurant.suggest'];
			unset($_SESSION['restaurant.suggest']);
		} else {
			$restaurants = new RestaurantModel((int)$id);
		}
		return $restaurants;
	}
	
}



