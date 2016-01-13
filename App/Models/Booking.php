<?php

namespace App\Models;

class Booking extends DatabaseModel
{

    protected static $columns = ['id', 'user_id', 'restaurant_id', 'date', 'time','people', 'name','email','phone','comment'];

    protected static $tableName = "booking";

    // protected static $validationRules = [
    			
    // ];

    public function user()
    {
    	return new User($this->user_id);
    }

    
}