<?php

namespace App\Controllers;

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// use App\Controllers\AboutController;

switch ($page) {
	case "home":
		$controller = new HomeController();
		$controller -> show();
		break;

	case "restaurants":
		$controller = new RestaurantsController();
		$controller -> show();
		break;


	case "about":
		$controller = new AboutController();
		$controller -> show();
		break;
	
	default:
		echo "404";
		break;


// switch ($page) {
// 	case 'home':
// 		include "templates/index.inc.php";
// 		break;

// 	case 'restaurants':
// 		include "templates/restaurants.inc.php";
// 		break;

// 	case 'about':
// 		include "templates/about.inc.php";
// 		break;
	
// 	default:
// 		echo "404";
// 		break;
}