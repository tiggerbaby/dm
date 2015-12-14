<?php

namespace App\Controllers;
use App\Models\Exceptions\ModelNotFoundException;

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// use App\Controllers\AboutController;
try{
	switch ($page) {
	case "home":
		$controller = new HomeController();
		$controller -> show();
		break;

	case "restaurants":
		$controller = new RestaurantsController();
		$controller -> show();
		break;
    
    case "restaurantsuggest":
        $controller = new RestaurantSuggestController();
	    $controller-> show();		
		break;

	case "about":
		$controller = new AboutController();
		$controller -> show();
		break;
	
	default:
		echo "404";
		break;

	default:
			throw new ModelNotFoundException();
			break;
	}
}catch (ModelNotFoundException $e)
{
	$controller = new ErrorController();
	$controller->error404();

} catch (InsufficientPrivilegesException $e)
{
	$controller = new ErrorController();
	$controller->error401();
}



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
