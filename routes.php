<?php

namespace App\Controllers;
use App\Models\Exceptions\ModelNotFoundException;
use App\Services\Exceptions\InsufficientPrivilegesException;

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


try{
	switch ($page) {
	case "home":
		$controller = new HomeController();
		$controller -> show();
		break;

		case "register":
			
			$controller = new AuthenticationController();
			$controller->register();

			break;
		case "auth.store":
			
			$controller = new AuthenticationController();
			$controller->store();

			break;
		case "login":
			
			$controller = new AuthenticationController();
			$controller->login();

			break;
		case "auth.attempt":
			$controller = new AuthenticationController();
			$controller->attempt();
			
			break;
		case "logout":
			
			$controller = new AuthenticationController();
			$controller->logout();

			break;

	 // case "register":
			
		// 	$controller = new AuthenticationController();
		// 	$controller->register();

		// 	break;

	 //  case "registersuccess":
	 //  $controller = new AuthenticationController();
		// 	$controller->store();

		// 	break;
	  		
		// case "auth.store":
			
		// 	$controller = new AuthenticationController();
		// 	$controller->store();

		// 	break;
		// case "login":
			
		// 	$controller = new AuthenticationController();
		// 	$controller->login();

		// 	break;
		// case "auth.attempt":
		// 	$controller = new AuthenticationController();
		// 	$controller->attempt();
			
		// 	break;
		// case "logout":
			
		// 	$controller = new AuthenticationController();
		// 	$controller->logout();


	case "restaurants":
		$controller = new RestaurantsController();
		$controller -> show();
		break;
	
	case "restaurantsuggest":
    
        $controller = new RestaurantSuggestController();
	    $controller-> show();		
		break;
		
	case "restaurantsuggest.invalid":
    
        $controller = new RestaurantSuggestController();
	    $controller-> displayerror();		
		break;

    case "restaurantsuggeststore":
    
        $controller = new RestaurantSuggestController();
	    $controller-> store();		
		break;
     
     	case "restaurantsuggestsuccess":

			$controller = new RestaurantSuggestSuccessController();
			$controller->show();		
			
			break;

      
	
	case "about":
		$controller = new AboutController();
		$controller -> show();
		break;

	 case "enqiry.invalid":
    
        $controller = new AboutController();
	    $controller-> displayerror();		
		break;

    case "enqirystore":
    
        $controller = new AboutController();
	    $controller-> store();		
		break;
   case "enqirysuccess":
    
        $controller = new AboutController();
	    $controller-> success();		
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
