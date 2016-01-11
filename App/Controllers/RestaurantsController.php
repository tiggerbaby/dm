<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\RestaurantModel;
use App\Views\RestaurantsView;
use App\Views\SingleRestaurantView;
use App\Views\RestaurantCreateView;


class RestaurantsController extends Controller
{   
	public function index()
	{ 
		$pageNumber= isset($_GET['p']) ? $_GET['p'] : 1;
		$pageSize = 6;
		$recordCount = RestaurantModel::count();

		$restaurants = RestaurantModel::all("title", true,false, $pageNumber, $pageSize);
		$view = new RestaurantsView(compact('restaurants', 'pageNumber', 'pageSize', 'recordCount'));
		$view-> render();
	}

	public function show()
	{
		$restaurant = new RestaurantModel((int)$_GET['id']);
		$newcomment = $this->getCommentFormData();
		$comments = $restaurant->comments();
		$average_rating = $restaurant->averageRating();
		$tags = $restaurant -> getTags();

		
		$view = new SingleRestaurantView(compact('restaurant', 'newcomment', 'comments', 'average_rating','tags'));
		$view->render();
	}
	public function create()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = $this->getFormData();
		$view = new RestaurantCreateView(['restaurant' => $restaurant]);
		$view->render();
	}
	public function store()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = new RestaurantModel($_POST);
		
		if(is_array($restaurant->tags)){
			$restaurant->tags = implode(",", $restaurant->tags);

		}
		if(! $restaurant->isValid()){
			$_SESSION['restaurant.create'] = $restaurant;
			header("Location: .\?page=restaurant.create");
			exit();
		}

		if($_FILES['poster']['error'] === UPLOAD_ERR_OK){
			$restaurant->savePoster($_FILES['poster']['tmp_name']);
		}

		$restaurant->save();
		$restaurant->saveTags();
		header("Location: .\?page=restaurant&id=" . $restaurant->id);
	}
	public function edit()
	{   
		static::$auth->mustBeAdmin();
		$restaurant = $this->getFormData($_GET['id']);
		$restaurant->loadTags();
		$view = new RestaurantCreateView(compact('restaurant','tags'));
		$view->render();
	}

	public function update()
	{
		static::$auth->mustBeAdmin();

		$restaurant = new RestaurantModel($_POST['id']);
		$restaurant->processArray($_POST);

		if(is_array($movie->tags)){
			$restaurant->tags = implode(",", $restaurant->tags);
		}
		
		if(! $restaurant->isValid()){
			$_SESSION['restaurant.create'] = $movie;
			header("Location: .\?page=restaurant.edit&id=".$_POST['id']);
			exit();
		}

		if($_FILES['poster']['error'] === UPLOAD_ERR_OK){
			$movie->savePoster($_FILES['poster']['tmp_name']);
		} else if(isset($_POST['removeImage']) && $_POST['removeImage'] === "true") {
			$movie->poster = null;
		}

		$restaurant->save();
		$restaurant->saveTags();
		header("Location: .\?page=restaurant&id=" . $restaurant->id);
	}
	public function destroy()
	{   
		static::$auth->mustBeAdmin();
		RestaurantModel::destroy($_POST['id']);
		header("Location: .\?page=restaurants");
	}
	public function getFormData($id = null){
		if(isset($_SESSION['restaurant.create'])){
			$restaurant = $_SESSION['restaurant.create'];
			unset($_SESSION['restaurant.create']);
		} else {
			$restaurant = new RestaurantModel((int)$id);
		}
		return $restaurant;
	}
	public function getCommentFormData($id = null){
		if(isset($_SESSION['comment.form'])){
			$newcomment = $_SESSION['comment.form'];
			unset($_SESSION['comment.form']);
		} else {
			$newcomment = new CommentModel((int)$id);
		}
		return $newcomment;
	}
}

