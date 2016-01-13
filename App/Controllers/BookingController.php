<?php

namespace App\Controllers;

use App\Views\EnquirySuccessView;


class BookingController extends Controller
{
	public function create()
    {   
        $input = $_POST;
       
        $input['user_id'] = static::$auth->user()->id;

        $newbooking = new Booking($input);
        
        // if( ! $newbooking->isValid()){
        // 	$_SESSION['booking.form'] = $newbooking;
        // 	header("Location:.\?page=booking&id=" . $newbooking->restaurant_id);
        // 	exit();
        // }

        $newcomment->save();
        header("Location: ./?page=booking&id=" . $newbooking->restaurant_id . "#booking-" . $newbooking->id);
    }

}


