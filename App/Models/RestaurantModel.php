<?php

namespace App\Models;
use PDO;
// use finfo;
// use Intervention\Image\ImageManagerStatic as Image;

class RestaurantModel extends DatabaseModel
{

	protected static $tableName = "restaurant_suggest";
	protected static $columns = ['id','restaurant_name','restaurant_address','restaurant_phone','email'];
	// protected static $fakeColumns = ['rating'];
	protected static $validationRules = [
					"restaurant_name" 		=> "minlength:3",
					"restaurant_address"    => "minlength:4",
					"restaurant_phone" 	=> "minlength:4,maxlength:12,numeric",
					"email" => "email"

	];
	
}