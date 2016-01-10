<?php

namespace App\Models;

use PDO;
use finfo;


class RestaurantModel extends DatabaseModel
{
	// public $data;

	// private static $db;

    protected static $tableName = "restaurants";
	protected static $columns = ['id','title','discount','address','phone'];
    protected static $validationRules = [
					"title"   => "minlength:1,unique:App\Models\RestaurantModel",   //,unique",
					"discount"=> "minlength:2",
					"address" => "minlength:4",
					"phone"=>"minlength:5,numeric"
					];

	public function averageRating()
	{
		$comments = $this->comments();

		// Calculate average rating
		$sum = 0;
		$num_comments = count($comments);

		foreach ($comments as $comment)
		{
			$sum = $sum + $comment->rating;
		}

		return $sum / $num_comments;
	}
	
    public function comments()
	{
		$result = CommentModel::allBy('restaurant_id', $this->id);
		return $result;
	}
}