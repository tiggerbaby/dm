<?php

namespace App\Models;

class CommentModel extends DatabaseModel
{

    protected static $columns = ['id', 'user_id', 'restaurant_id', 'created', 'comment'];

    protected static $tableName = "comments";

    protected static $validationRules = [
    			'user_id' => 'numeric,exists:\App\Models\User',
    			'restaurant'=> 'numeric,exists:\App\Models\RestaurantModel',
    			'comment' => 'minlength:10,maxlength:1600'
    ];

    public function user()
    {
    	return new User($this->user_id);
    }

    
}