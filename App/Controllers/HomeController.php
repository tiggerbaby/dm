<?php

namespace App\Controllers;


use App\Models\UserModel;
use App\Models\RestaurantModel;
use App\Views\HomeView;
use App\Views\SearchResultsView;



class HomeController 
{
	public function show()
	{ 
        $restaurants = RestaurantModel::all("", true, true);
		$view = new HomeView(['restaurants' => $restaurants]);
		$view->render();
	}
 
	 function search() 
	{
		if(! isset($_GET['q'])){
			$q = "";
		} else {
			$q = $_GET['q'];
		}
		$restaurants = RestaurantModel::search($q);

		$view = new SearchResultsView(compact('restaurants', 'q'));
		$view->render();
	}

}