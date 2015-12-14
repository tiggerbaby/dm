<?php

namespace App\Controllers;

use App\Views\RestaurantSuggestView;
// use App\Views\SuggesterEmailView;
// use App\Views\HostEmailView;
// use App\Views\RestaurantSuggestSuccessView;

class RestaurantSuggestController extends Controller
{  
	public function show()
	{
		$view = new RestaurantSuggestView();
		$view-> render();
	}
	// private $restaurantsuggest = [];
	
	// public function __construct()
	// {
	// 	$this->restaurantsuggest = [
	// 					'errors' => []
	// 					];
	// }
	// public function resetSessionData()
	// {
	// 	$_SESSION['suggestmovieerror'] = NULL;
	// 	$_SESSION['restaurantsuggest'] = NULL;
		
	// }
	// public function getFormData() 
	// {
	// 	$expectedVariables = ['title', 'email', 'newsletter'];

	// 	foreach ($expectedVariables as $variable) {

	// 		// assume no errors
	// 		$this->restaurantsuggest['errors'][$variable]="";

	// 		if(isset($_POST[$variable])){
	// 			$this->restaurantsuggest[$variable] = $_POST[$variable];
	// 		}else {
	// 			$this->restaurantsuggest[$variable] = "";
	// 		}
	// 	}

	// }
	// public function isFormValid()
	// {
	// 	//validating form
	// 	$valid = true;

	// 	if(strlen($this->restaurantsuggest['title']) == 0) {
	// 		$this->restaurantsuggest['errors']['title']= "Enter a movie title";
	// 		$valid = false;
	// 	}

	// 	if(! filter_var($this->restaurantsuggest['email'], FILTER_VALIDATE_EMAIL)){
	// 		$this->restaurantsuggest['errors']['email']="Enter a valid email address";
	// 		$valid = false;
	// 	}
	// 	return $valid;
	// }

	// public function show()
	// {
	// 	$this->resetSessionData();

	// 	//capture suggester data
	// 	$this->getFormData();

	// 	//validate form data
	// 	if(! $this->isFormValid()){
	// 		$_SESSION['moviesuggest'] = $this->restaurantsuggest;
	// 		header("Location:./#moviesuggest");
	// 		return;
	// 	}

	// 	//once  form is validated, get to thanks page
	// 	$view = new MovieSuggestSuccessView();
	// 	$view->render();

	// 	//send email to the suggester
	// 	$suggesterEmail = new SuggesterEmailView($this->restaurantsuggest);
	// 	$suggesterEmail->render();

	// 	//send email to the host
	// 	$hostEmail = new HostEmailView($this->restaurantsuggest);
	// 	$hostEmail->render();


	// }
}