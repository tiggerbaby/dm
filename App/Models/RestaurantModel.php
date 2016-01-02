<?php

namespace App\Models;

use PDO;


class RestaurantModel extends DatabaseModel
{
	// public $data;

	// private static $db;

    protected static $tableName = "restaurants";
	protected static $columns = ['id','title','discount','address','phone'];

	// private static function getDatabaseConnection() 
	// {
	// 	if (! self::$db) {
	// 		$dsn = 'mysql:host=localhost;dbname=dm;charset=utf8';
	// 		self::$db = new PDO($dsn, 'root', '');

	// 		self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 		self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	// 	}
	// 	return self::$db;

		
	// }
	// public static function all()
	// {
	// 	$models = [];

	// 	$db = self::getDatabaseConnection();

	// 	$statement = $db->prepare("SELECT id, title, discount, address, phone, FROM restaurants;");
	// 	$statement->execute();

	// 	$record = $statement->fetch(PDO::FETCH_ASSOC);

	// 	while($record = $statement->fetch(PDO::FETCH_ASSOC)){
	// 		$model = new Restaurants();
	// 		$model->data = $record;
	// 		array_push($models, $model);

	// 	}
		
	// 	return $models;
	// 	// var_dump($models);
	// }
}