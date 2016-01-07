<?php

namespace App\Controllers;

use App\Views\HomeView;
use App\Models\UserModel;
// use App\Controllers\RestaurntsController;
use App\Models\RestaurantModel;



class HomeController 
{
	public function show()
	{ 
        $restaurants = RestaurantModel::all("", true, true);
		$view = new HomeView(['restaurants' => $restaurants]);
		$view->render();
	}
 
	 

}