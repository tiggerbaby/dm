<?php

namespace App\Controllers;

use App\Views\RestaurantsView;
use App\Models\RestaurantModel;
use App\Views\SingleRestaurantView;
use App\Views\RestaurantCreateView;

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
	public function create()
	{
		$restaurant = $this->getFormData();
		$view = new RestaurantCreateView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function store()
	{
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
		$restaurant = $this->getFormData($_GET['id']);
		$view = new RestaurantCreateView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function destroy()
	{
		Restaurants::destroy($_POST['id']);
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

