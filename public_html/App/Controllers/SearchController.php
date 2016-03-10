<?php

namespace App\Controllers;
use App\Models\RestaurantModel;
use App\Views\SearchResultsView;

class SearchController extends Controller
{
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