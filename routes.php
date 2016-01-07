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

	case "restaurants":
		$controller = new RestaurantsController();
		$controller -> index();
		break;
    
    case "restaurant":
        $controller = new RestaurantsController();
		$controller -> show();
		break;

    case "restaurant.create":
		$controller = new RestaurantsController();
		$controller->create();
		break;

    case "restaurant.edit":
		$controller = new RestaurantsController();
		$controller->edit();
		break;

	case "restaurant.store":
		$controller = new RestaurantsController();
		$controller->store();
		break;

	case "restaurant.destroy":
		$controller = new RestaurantsController();
		$controller->destroy();
		break;

	case "comment.create":

            $controller = new CommentController();
            $controller->create();

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

    case "booking":
         $controller = new BookingController();
         $controller->show();
	
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
			$controller = new EnquirySuccessController();
			$controller->show();					
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
