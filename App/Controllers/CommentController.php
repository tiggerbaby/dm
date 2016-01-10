<?php

namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends Controller
{
    public function create()
    {   
        $input = $_POST;
        $input['user_id'] = static::$auth->user()->id;
        $input['created'] = time();
        
        $input['rating'] = $input['rating'] * 2;

        //var_dump($input);

        $newcomment = new CommentModel($input);
        
        //var_dump($newcomment);

        if( ! $newcomment->isValid()){

        	$_SESSION['comment.form'] = $newcomment;

            //var_dump($newcomment->errors);

        	header("Location:./?page=restaurant&id=" . $newcomment->restaurant_id);
            exit();
        }

        $newcomment->save();        
        header("Location: ./?page=restaurant&id=" . $newcomment->restaurant_id . "#comment-" . $newcomment->id);           
    }
}