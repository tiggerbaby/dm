<?php

namespace App\Models;

use PDO;
use finfo;
use Intervention\Image\ImageManagerStatic as Image;


class RestaurantModel extends DatabaseModel
{
	// public $data;

	// private static $db;

    protected static $tableName = "restaurants";
	protected static $columns = ['id','title','discount','address','phone','poster'];
	protected static $fakeColumns = ['tags'];
    protected static $validationRules = [
					"title"   => "minlength:1",   
					"discount"=> "minlength:2",
					"address" => "minlength:4",
					"phone"=>"minlength:5,maxlength:12"
					];

	public function averageRating()
	{
		$comments = $this->comments();

		// Calculate average rating
		$sum = 0;
		$num_comments = count($comments);

		if ( $num_comments == 0 )
		{
			return 0;
		}

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
		// var_dump($models);
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

			$this->deleteAllTagsFromRestaurant($db);
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
		$query = "DELETE FROM restaurants_tags WHERE restaurant_id= :restaurant_id";
		$statement = $db->prepare($query);
		$statement->bindValue(":restaurant_id", $this->id);
		$statement->execute();
	}
	public function savePoster($filename)
	{
		$finfo = new finfo(FILEINFO_MIME_TYPE);
		$mime = $finfo->file($filename);
		
		$extensions = [
			'image/jpg'	=> '.jpg',
			'image/jpeg'=> '.jpg',
			'image/png'	=> '.png',
			'image/gif'	=> '.gif'
		];

		if(isset($extensions[$mime])){
			$extension = $extensions[$mime];
		} else {
			$extension = '.jpg';
		}

		$newFileName = uniqid() . $extension;
		
		$folder = "./img/poster/originals";
		if( ! is_dir($folder)){
			mkdir($folder, 0777, true);
		}
		$destination = $folder . "/" . $newFileName;
		move_uploaded_file($filename, $destination);

		$this->poster = $newFileName;

		//240X300 image file size
		if( ! is_dir("./img/poster/300h")){
			mkdir("./img/poster/300h/", 0777, true);
		}
		$img = Image::make($destination);
		$img->fit(180,220);
		$img->save("./img/poster/300h/" . $newFileName);

		// 80X100 image file size
		if( ! is_dir("./img/poster/100h")){
			mkdir("./img/poster/100h/", 0777, true);
		}

		$img = Image::make($destination);
		$img->fit(104,136);
		$img->save("./img/poster/100h/" . $newFileName);
	}	

	public static function search($searchQuery)
		{
			$models =[];

			$db = static::getDatabaseConnection();
			
			$query = "SET @searchterm = :searchQuery ";
			$statement = $db->prepare($query);
			$statement->bindValue(":searchQuery", $searchQuery);
			$result = $statement->execute();
			// var_dump($result);


			// $query = "
			// 			SELECT restaurants.id, title, description, taglist, 
			// 				MATCH(title) AGAINST(@searchterm) * 2 AS score_title, 
			// 			FROM restaurants
			// 			WHERE 
			// 				MATCH(title) AGAINST(@searchterm) OR
			// 				MATCH(address) AGAINST(@searchterm) OR
			// 				MATCH(taglist) AGAINST(@searchterm IN BOOLEAN MODE)
			// 				ORDER BY (score_title + score_address + score_tag) DESC";

			$query = "
						SELECT restaurants.id, title, address, taglist, poster, 
							MATCH(title) AGAINST(@searchterm) * 2 AS score_title, 
							MATCH(address) AGAINST(@searchterm) AS score_address,
							MATCH(taglist) AGAINST(@searchterm IN BOOLEAN MODE) * 1.5 AS score_tag
						FROM restaurants
						LEFT JOIN (
							SELECT restaurant_id, GROUP_CONCAT(tag SEPARATOR ' ') AS taglist FROM tags
							RIGHT JOIN restaurants_tags ON restaurants_tags.tag_id = id
							GROUP BY restaurant_id) AS tags ON restaurants.id = restaurant_id
						WHERE 
							MATCH(title) AGAINST(@searchterm) OR
							MATCH(address) AGAINST(@searchterm) OR
							MATCH(taglist) AGAINST(@searchterm IN BOOLEAN MODE)
							ORDER BY (score_title + score_address + score_tag) DESC";
            
          

			$statement = $db->prepare($query);
			// var_dump($statement);
			$record = $statement->execute();
			// var_dump($record);
			while ($record = $statement->fetch(PDO::FETCH_ASSOC)) {
				$model = new RestaurantModel();
				$model->data = $record;
				array_push($models, $model);
			}
			// var_dump($models);
			// die();
			return $models;

	}
	}