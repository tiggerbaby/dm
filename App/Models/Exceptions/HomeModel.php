<?php

namespace App\Models;
use PDO;
// use finfo;
// use Intervention\Image\ImageManagerStatic as Image;

class HomeModel extends DatabaseModel
{

	protected static $tableName = "enqiry_form";
	protected static $columns = ['id','name','phone','email','restaurant','address','comment'];
	protected static $validationRules = [
					"name"   => "minlength:1",
					"phone" 	=> "minlength:4,maxlength:12,numeric",
					"email"=> "email",
					"restaurant"=>"minlength:1",
					"address"=>"minlength:3"
	];
	
}