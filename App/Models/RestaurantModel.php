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
	protected static $fakeColumns = ['tags'];
    protected static $validationRules = [
					"title"   => "minlength:1,unique:App\Models\RestaurantModel",   //,unique",
					"discount"=> "minlength:2",
					"address" => "minlength:4",
					"phone"=>"minlength:5"
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

	public function getTags()
	{
		$models = [];
		$db = static::getDatabaseConnection(); 

		$query =" SELECT id, tag FROM tags ";
		$query .= " JOIN restaurants_tags ON id = tag_id ";
		$query .= " WHERE restaurant_id =:id";

		$statement= $db->prepare($query);
		$statement->bindValue(":id", $this->id);
		$statement->execute();

		while($record = $statement->fetch(PDO::FETCH_ASSOC)){
			$model = new Tags();
			$model->data = $record;
			array_push($models, $model);
		}
		return $models;
	}
	public function loadTags()
	{
		$tags = $this->getTags();
		$taglist = [];
		foreach ($tags as $tag) {
			array_push($taglist, $tag->tag);
		}
		$this->tags = implode(",", $taglist);
	}	

		public function saveTags()
	{
		// take the string from tags property
		//  explode it into an array
		// echo "here";
		// 	die();
		$tags = explode(",", $this->tags);
		foreach ($tags as $tag) {
			$tag = trim($tag);

		}
		$db = static::getDatabaseConnection();

		$db->beginTransaction();

		try {
			$this->addNewTags($db, $tags);
			$tagIds = $this->getTagIds($db, $tags);

			// $this->deleteAllTagsFromRestaurant($db);
			$this->insertTagsForRestaurant($db, $tagIds);
	
			$db->commit();

		} catch (Exception $e) {

			$db->rollback();
			throw $e;
		}
	}
	private function addNewTags($db, $tags)
	{
		
		// insert each tag into the tags table (ignore all duplicates)
		$query = "INSERT IGNORE INTO tags (tag) VALUES ";

		$tagvalues = [];
		for ($i=0; $i < count($tags); $i++) { 
			array_push($tagvalues, "(:tag{$i})");
		}

		$query .= implode(",", $tagvalues);
		$statement = $db->prepare($query);
		for ($i=0; $i < count($tags); $i++) { 

			$statement->bindValue(":tag{$i}", $tags[$i]);
		}
		$statement->execute();	

	}
	private function getTagIds($db, $tags)
	{
		//getting the Id for each tags
		$query = "SELECT id FROM tags WHERE ";
		$tagvalues = [];
		for ($i=0; $i < count($tags); $i++) { 
			array_push($tagvalues, "tag =:tag{$i}");
		}
		$query .= implode(" OR ", $tagvalues);
		$statement = $db->prepare($query);
		// var_dump($statement);
		
		for ($i=0; $i < count($tags); $i++) { 
			$statement->bindValue(":tag{$i}", $tags[$i]);
		}
		$statement->execute();

		$record = $statement->fetchAll(PDO::FETCH_COLUMN);

		return $record;
	}
	private function insertTagsForRestaurant($db, $tagIds)
	{
		$query = "INSERT IGNORE INTO restaurants_tags (restaurant_id, tag_id) VALUES ";

		$tagvalues = [];
		for ($i=0; $i < count($tagIds); $i++) { 
			array_push($tagvalues, "(:restaurant_id_{$i}, :tag_id_{$i})");
		}
		$query .= implode(",", $tagvalues);
		$statement = $db->prepare($query);
		
		for ($i=0; $i < count($tagIds); $i++) { 
			$statement->bindValue(":restaurant_id_{$i}", $this->id);
			$statement->bindValue(":tag_id_{$i}", $tagIds[$i]);
		}
		$statement->execute();
	}
	private function deleteAllTagsFromRestaurant($db)
	{
		$query = "DELETE FROM restaurants_tag WHERE restaurant_id= :restaurant_id";
		$statement = $db->prepare($query);
		$statement->bindValue(":restaurant_id", $this->id);
		$statement->execute();
	}
	}