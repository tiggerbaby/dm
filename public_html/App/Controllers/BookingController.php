<?php

namespace App\Controllers;

// use App\Views\BookingSuccessView;
use App\Models\Booking;
use App\Modles\RestaurantsController;


class BookingController extends Controller
{
	public function create()
    {   
        $input = $_POST;
       
        
        $input['user_id'] = static::$auth->user()->id;

        

        $newbooking = new Booking($_POST);

        
        
        if( ! $newbooking->isValid()){
        	$_SESSION['booking.form'] = $newbooking;
        	header("Location:.\?page=booking&id=" . $newbooking->restaurant_id);
        	exit();
        }

        $newbooking->save();

        $view = new SingleRestaurantView(compact('newbooking'));
        $view->render();
        header("Location: ./?page=booking&id=" . $newbooking->restaurant_id . "#booking-" . $newbooking->id);
    }
  // public function displayerror()
  //   {
  //       $newbooking = $this->getFormData();
  //       $view = new BookingView(compact('booking'));
  //       $view->render();
  //   }

  //   public function store()
  //   {
  //       $newbooking = new BookingModel($_POST);
        
  //       if(! $newbooking->isValid()){
  //           // var_dump($restaurants);
  //           $_SESSION['booking.form'] = $new;
  //           header("Location: .\?page=booking.invalid");
  //           exit();
  //       }
        
  //      $newbooking-> save();
  //       header("Location: .\?page=bookingsuccess");

        

}


 // $restaurants = $this->getFormData();
 //        $view = new RestaurantSuggestView(compact('restaurants'));
 //        $view->render();