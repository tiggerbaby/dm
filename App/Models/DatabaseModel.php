<?php

namespace App\Models;

use PDO;
use UnexpectedValueException;
use App\Models\Exceptions\ModelNotFoundException;

abstract class DatabaseModel
{
	public $data = [];
	public $errors = [];

	protected static $columns =[];
	private static $db;

	public function __construct($input = null)
	{
		if(static::$columns){
			foreach (static::$columns as $column) {
				$this->$column = null;
				$this->errors[$column] = null;
			}
		}
		// if(static::$fakeColumns){
		// 	foreach (static::$fakeColumns as $column) {
		// 		$this->$column = null;
		// 		$this->errors[$column] = null;
		// 	}
		// }
		
		if(is_numeric($input) && $input > 0 ){
			//if input is a number, load that record from the db
			$this->find($input);
		}
		if (is_array($input)) {
			//if input is array, load that data from array
			$this->processArray($input);
		}
	}
    
    public function processArray($input)
	{
		foreach(static::$columns as $column){
			if(isset($input[$column]))
				$this->$column = $input[$column];
		}
		// foreach (static::$fakeColumns as $column) {
		// 	if(isset($input[$column]))
		// 		$this->$column = $input[$column];
		// }
	}

	protected static function getDatabaseConnection() 
	{
		if (! self::$db){
			$dsn = 'mysql:host=localhost;dbname=dm;charset=utf8';
			self::$db = new PDO($dsn, 'root', '');

			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}
		return self::$db;
	}
    
    public function save()
	{
		if($this->id > 0){
			$this->update();
		} else {
			$this->insert();
		}
	}

	public function insert()
	{
		$db = static::getDatabaseConnection();

		$columns = static::$columns;

		unset($columns[array_search('id', $columns)]);

		$query = "INSERT INTO " . static::$tableName . 
			" (". implode(", ", $columns) . ")" .
			" VALUES (";

		$insertcols = [];
		foreach ($columns as $column) {
			array_push($insertcols, ":" . $column);
		}

		$query .= implode(", ", $insertcols);
		$query .= ")";

		$statement = $db->prepare($query);
		// var_dump($statement);

		foreach ($columns as $column) {
			if ($column === "password") {
				$this->$column = password_hash($this->$column, PASSWORD_DEFAULT);
			}
			var_dump($this->$column);
			$statement->bindValue(":" . $column, $this->$column);
		}
		
		$result = $statement->execute();
		// var_dump($result);
		$this->id =$db->lastInsertId();
		
	}

	public function __get($name)
	{
		if (in_array($name, static::$columns)) {
			
           return $this->data[$name];
         }
        throw new UnexpectedValueException("Property '$name' not found in the data variable.");
    }
	public function __set($name, $value)
	{
		if (! in_array($name, static::$columns)) {
            throw new UnexpectedValueException("Property '$name' not found in the data variable.");
          }
        $this->data[$name] = $value;
 	}

}	
		