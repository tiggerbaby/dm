<?php

namespace App\Controllers;


use App\Models\UserModel;
use App\Models\RestaurantModel;
use App\Views\HomeView;
use App\Views\RestaurantsView;



class HomeController extends Controller
{
	public function show()
	{ 
        $restaurants = RestaurantModel::all("", true, true);
		$view = new HomeView(['restaurants' => $restaurants]);
		$view->render();
	}
    
    
}