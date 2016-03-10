<?php

namespace App\Models;

class CommentModel extends DatabaseModel
{

    protected static $columns = ['id', 'user_id', 'restaurant_id', 'created', 'rating','comment'];

    protected static $tableName = "comments";

    protected static $validationRules = [
    			'user_id' => 'numeric,exists:\App\Models\User',
    			'restaurant_id'=> 'numeric,exists:\App\Models\RestaurantModel',
                'rating'=>'isempty',
    			'comment' => 'minlength:10,maxlength:1600'
    ];

    public function user()
    {
    	return new User($this->user_id);
    }
}