<?php

namespace App\Models;

class Booking extends DatabaseModel
{

    protected static $columns = ['id', 'user_id', 'restaurant_id', 'date', 'time','people', 'name','email','phone','comment'];

    protected static $tableName = "booking";

    protected static $validationRules = [
    			"date" => "isempty",
    			"time" => "isempty",
    			"people" => "isempty",
    			"name" => "isempty",
    			"email" => "email",
    			"phone" 	=> "minlength:4,maxlength:12,numeric",
    ];

    public function user()
    {
    	return new User($this->user_id);
    }

    
}