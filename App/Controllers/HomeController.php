<?php

namespace App\Controllers;

use App\Views\HomeView;
use App\Models\UserModel;

class HomeController
{
	public function show()
	{ 
        
		$view = new HomeView();
		$view->render();
	}
	// public function getMovieSuggestFormData() could be use for Restaurants View->Restaurant Suggest
	// {
	// 	if(isset($_SESSION['moviesuggest'])){
	// 		$moviesuggest = $_SESSION['moviesuggest'];
	// 	} else {
	// 		$moviesuggest = [
	// 			'title' => "",
	// 			'email' => "",
	// 			'newsletter' => "",
	// 			'errors' => [
	// 				'title' =>"",
	// 				'email' =>"",
	// 				'newsletter' =>""
	// 			]
	// 		];
	// 	}
	// 	return $moviesuggest;
	// }
}