<?php

namespace App\Controllers;

use App\Views\RestaurantsView;
use App\Models\RestaurantModel;
use App\Views\SingleRestaurantView;
use App\Views\RestaurantCreateView;


class RestaurantsController extends Controller
{   
	public function index()
	{ 
		//
		// These two lines are exactly the same.
		// We do not pass any values to the function on the first line, so the default values are used. 
		// We do pass values to the function on the second line, but the values we pass are the same as teh default values.
		// Therefore the two lines are exactly the same

		// $restaurants = RestaurantModel::all(); 
	    // $restaurants = RestaurantModel::all("", true, false);
		//


	    $restaurants = RestaurantModel::all();

		$view = new RestaurantsView(['restaurants' => $restaurants]);
		$view-> render();
	}

	public function promoted()
	{  
	    $restaurants = RestaurantModel::all("", true, true);
	    return $restaurants;
		//$view = new RestaurantsView(['restaurants' => $restaurants]);
		//$view-> render();
	}

	public function show()
	{
		$restaurant = new RestaurantModel((int)$_GET['id']);
		$view = new SingleRestaurantView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function create()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = $this->getFormData();
		$view = new RestaurantCreateView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function store()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = new RestaurantModel($_POST);
		if(! $restaurant->isValid()){
			$_SESSION['restaurant.create'] = $restaurant;
			header("Location: .\?page=restaurant.create");
			exit();
		}
		$restaurant->save();
		header("Location: .\?page=restaurant&id=" . $restaurant->id);
	}
	public function edit()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = $this->getFormData($_GET['id']);
		$view = new RestaurantCreateView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function destroy()
	{   
		static::$auth->mustBeAdmin();
		RestaurantModel::destroy($_POST['id']);
		header("Location: .\?page=restaurants");
	}
	public function getFormData($id = null){
		if(isset($_SESSION['restaurant.create'])){
			$restaurant = $_SESSION['restaurant.create'];
			unset($_SESSION['restaurant.create']);
		} else {
			$restaurant = new RestaurantModel((int)$id);
		}
		return $restaurant;
	}
}

